<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        
      </div>

      
      <div class="container">
        <div class="row">
            <h1>Product Details</h1>
        </div>
        <div class="row d-flex justify-content-end"> 
            <div class="col-3 d-flex justify-content-end">
                <button id="newProduct" class="btn btn-success">New</button>
            </div>   
        </div>

        <!--table start-->
        <div class="row">  
            <table class="table">
                <tr>
                    <th>SN</th>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Quality</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                <?php
                
                $conn=new mysqli("localhost","root","","agtrade");
                if($conn->connect_error)
                {
                    die("Connection Error");
                }
                $sql="SELECT * from products p,registration r WHERE p.id=r.id and r.id='$uid'";
                $result=$conn->query($sql);
                $i=1;
                
                foreach($result as $row)
                {
                    echo"<tr>";
                    echo("<td>".$i++."</td><td>".$row['p_name']."</td><td>".$row['p_quantity']."</td>");
                    echo("<td>".$row['p_price']."</td><td>".$row['p_quality']."</td><td>".$row['p_status']."</td>");
                    echo "
                    <td>
                    <button id='".$row['pid']."'class='btnUpdate btn btn-info'>View</button>                      
                    <button id='".$row['pid']."'class='btnDelete btn btn-danger'>Delete</button></td>
                    </tr>
                    ";
                }
                ?>  
            </table>
            
        </div>
    </div>
    </main>
  </div>
</div>