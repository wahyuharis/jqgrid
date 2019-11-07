<script>
    $(document).ready(function () {
        data = [
            {"id": 1, "produk": "Produk 1", "qty": 12, "harga": 1000},
            {"id": 2, "produk": "Produk 2", "qty": 5, "harga": 1200}
        ];

        Grid = new JQgrid('#grid-editing', data);
        Grid.output_id('textarea[name=output]');
        Grid.remove_attribute('.remove');
        Grid.callback = function (cols, row) {
            cols = [
                {'input': 'input[name=id]', 'key': 'id'},
                {'input': 'input[name=produk]', 'key': 'produk'},
                {'input': 'input[name=qty]', 'key': 'qty'},
                {'input': 'input[name=harga]', 'key': 'harga'},
                {'input': '.total', 'key': 'total', 'value': float_to_currency(curency_to_float(row.harga) * curency_to_float(row.qty))},
            ];
            return cols;
        }
        Grid.run();


        $('#push').click(function () {
            push = {"id": 3, "produk": "Produk 1", "qty": 12, "harga": 1000};
            var i = 0;
            add = true;
            data_list = Grid.get_data();
            for (i = 0; i < data_list.length; i++) {
                if (data_list[i].id == push.id) {
                    add = false
                }
            }
            if (add) {
                Grid.push_row(push);
            }
        });


        cleave();
        $("body").on('DOMSubtreeModified', "#grid-editing", function () {
            cleave();
        });

        function cleave() {
            $('.thousand').toArray().forEach(function (field) {
                new Cleave(field, {
                    numeral: true,
                    numeralThousandsGroupStyle: 'thousand'
                })
            });
        }
    });

</script>