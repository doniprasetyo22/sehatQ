@include('layouts.head')
<div class="main-content">
<!-- Header -->
<div class="container-fluid pb-4 pt-4 pt-md-8">
      <!-- Card stats -->
    @include('search')
  <a href="/"><button type="button" class='btn btn-sm btn-success'>Kembali</button></a><br>
  <div class="ct-page-title">
    <h1 class="ct-title" id="content">Purchase History</h1>
  </div>
  <div class="row" id="contentpurchase">
    
  </div>
  <!-- <div class="col-12">
    <div class="card shadow">
      <div class="card-body">
          <table width="100%">
              <tr>
                  <td rowspan="2" width="30%">
                      <img width="100%" src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/76/Nintendo-Switch-Console-Docked-wJoyConRB.jpg/430px-Nintendo-Switch-Console-Docked-wJoyConRB.jpg">
                  </td>
                  <td width="5%">&nbsp;</td>
                  <td><div style="font-size: 18px"><a href="/produk/6723">Nitendo Switch</a></div></td>
              </tr>
              <tr>
                  <td>&nbsp;</td>
                  <td><h3 class="text-warning"><b>$340</b></h3></td>
              </tr>
          </table>
      </div>
    </div>
  </div> -->
  
  <!-- <div class="row" id="contentprods">
    <div class="col-12">
      <img src="/assets/img/theme/loadingnew.gif" width="100%">
    </div>
  </div> -->
  <br><br><br>
     
@include('layouts.footer')

<script type="text/javascript">
  
  $(function() {  

    $.ajax({
      type: 'GET',
      url: "{{ route('getpurchase') }}",
      
      success: function(data) {

        var content_datas="";
        var no = -1;

        $.each(data, function() {

          no++;
          var ids = data[no]['prod_id'];

          content_datas += "<div id='datanya_"+ids+"'>";
          content_datas += "</div>";

          $.ajax({
            type: 'GET',
            url: "https://private-4639ce-ecommerce56.apiary-mock.com/home",
            
            success: function(data) {

              var content_data="";
              var nos = -1;

              $.each(data[0]['data']['productPromo'], function() {

                  nos++;
                  var images = data[0]['data']['productPromo'][nos]['imageUrl'];
                  var id = data[0]['data']['productPromo'][nos]['id'];
                  var name = data[0]['data']['productPromo'][nos]['title'];
                  var price = data[0]['data']['productPromo'][nos]['price'];

                  if (id == ids){

                      content_data += "<div class='col-12'>";
                      content_data += "<div class='card shadow'>";
                      content_data += "<div class='card-body'>";
                      content_data += "<table width='100%''>";
                      content_data += "<tr>";
                      content_data += "<td rowspan='2' width='30%'>";
                      content_data += "<img width='100%' src='"+images+"'>";
                      content_data += "</td>";
                      content_data += "<td width='5%'>&nbsp;</td>";
                      content_data += "<td><div style='font-size: 18px'><a href='/produk/"+id+"'>"+name+"</a></div></td>";
                      content_data += "</tr>";
                      content_data += "<tr>";
                      content_data += "<td>&nbsp;</td>";
                      content_data += "<td><h3 class='text-warning'><b>"+price+"</b></h3></td>";
                      content_data += "</tr>";
                      content_data += "</table>";
                      content_data += "</div>";
                      content_data += "</div>";
                      content_data += "</div>";

                  }

              });

              $('#datanya_'+ids+'').html(content_data);

            }

          });

        });

        $('#contentpurchase').html(content_datas);

      }
    });

  });

</script>

</body>
</html>