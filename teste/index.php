<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teste CSS e Javascript</title>
    <link rel="stylesheet" href="master.min.css">
</head>
<style media="screen">

</style>
<body>

    <div class="container">
        <div class="col-md-10 mx-auto" style="margin-top: 50px;">
            <label for="">Select com pesquisa (chosen)</label>
            <select  name="" id="slc">
                <option value="" selected>Selecione</option>
                <option value="">1</option>
                <option value="">2</option>
                <option value="">3</option>
            </select>
            <label for="">Multiplo Select (multiselect jquery)</label>
            <select multiple class="form-control" name="" id="mslc" style="margin-top: 50px;">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>
            <label for="">Bootstrap DatePicker</label>
            <input type="text" class="form-control" id="data-picker"> <br>
            <label>DataTable</label>
            <div>
                <table class="table table-bordered dataTable">
                    <thead>
                        <tr>
                            <td>A</td>
                            <td>B</td>
                            <td>C</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>a</td>
                            <td>a</td>
                            <td>a</td>
                        </tr>
                        <tr>
                            <td>a</td>
                            <td>a</td>
                            <td>a</td>
                        </tr>
                        <tr>
                            <td>a</td>
                            <td>a</td>
                            <td>a</td>
                        </tr>
                        <tr>
                            <td>a</td>
                            <td>a</td>
                            <td>a</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <label for="">Mascara jquery</label>
            <input class="form-control money" type="text" name="" value="" > <br>

            <button class="btn btn-info" id="sa"> Sweet Alert 2</button>
            <button class="btn btn-primary" id="ta">Toast</button>

        </div>
    </div>
    <script src="master.min.js"></script>
    <script>
        $('#sa').click(function(){
            swal(
                'Good job!',
                'You clicked the button!',
                'success'
            )
        });
        $('#ta').click(function(){
            $.toast({
                heading: 'Information',
                text: 'Loaders are enabled by default. Use `loader`, `loaderBg` to change the default behavior',
                icon: 'info',
                position: 'top-right',
                loader: false,
            });
        });
        $(document).ready(function(){
           $('#slc').chosen({no_results_text: "Nenhum resultado para "});
           $('#data-picker').datepicker({
               language: "pt-BR",
               autoclose: true,
           });
           $('.dataTable').dataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Portuguese-Brasil.json",
                }
            });

            $('.money').mask('R$ 000.000.000.000,00');

            $('select[multiple]').multiselect({
              columns : 2,
              selectAll : true, //change false
              texts : {
                placeholder : 'Selecione ...',
                selectAll      : 'Marcar todos',
                unselectAll    : 'Desmarcar todos',
              }
            });
        });
    </script>
</body>
</html>
