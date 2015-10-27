@extends('mainlayout.backend')

@section('title', 'Page Title')
@section('content')
      <h1 class="page-header">ควยไรสัด <?php echo $result[0]->C_username; ?></h1>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Name</th>
                  <th>Lastname</th>
                </tr>
              </thead>
              <tbody>
                
                  <?php
                    for($i=0;$i<2;$i++){
                      echo "<tr>";
                      echo "<td>".$i."</td>";
                      echo "<td>".$result[$i]->C_username."</td>";
                      echo "<td>".$result[$i]->C_password."</td>";
                      echo "<td>".$result[$i]->C_name."</td>";
                      echo "<td>".$result[$i]->C_lastname."</td>";
                      echo "</tr>";
                    }
                  ?>
              </tbody>
            </table>
          </div>
@stop