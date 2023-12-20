<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <section class="content">
        <div class="row">
              <div class="col-xs-12">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">Dari : <b>{{ $origin }}</h3><br/>
                    <h3 class="box-title">Ke : <b>{{ $destination }}</b></h3>
                  </div>
                  <div class="box-body">
                    <table class="table table-striped">
                      <thead>
                      <tr>
                        <th>Nama Layanan</th>
                        <th>Tarif</th>
                        <th>ETD (Estimates Days)</th>
                      </tr>
                      </thead>
                      <tbody>
                        <?php for($i=0; $i<count($array_result["rajaongkir"]["results"][0]["costs"]); $i++){ ?>
                          <tr>
                            <td><?php echo $array_result["rajaongkir"]["results"][0]["costs"][$i]["service"] ?> </td>
                            <td><?php echo $array_result["rajaongkir"]["results"][0]["costs"][$i]["cost"][0]["value"] ?></td>
                            <td><?php echo $array_result["rajaongkir"]["results"][0]["costs"][$i]["cost"][0]["etd"] ?></td>
                          </tr>
                        <?php } ?>
                      </tbody>
                      <tfoot>
                      </tfoot>
                    </table>
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
      </section>
</body>
</html>