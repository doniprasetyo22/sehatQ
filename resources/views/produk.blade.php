@include('layouts.head')
<div class="main-content">
<!-- Header -->
<div class="container-fluid pb-4 pt-4 pt-md-8">
      <!-- Card stats -->
    @include('search')
  <div class="contentx">
  <a href="/"><button type="button" class='btn btn-sm btn-success'>Kembali</button></a><br><br>
  </div>
  <input type="hidden" value="{{ $id }}" id="id_prod">
  <div class="row" id="contentprods">
    <div class="col-12">
      <img src="/assets/img/theme/loadingnew.gif" width="100%">
    </div>
  </div>
  <br><br><br>
     
@include('layouts.footer')

<script type="text/javascript">

  $(function() {  

    var ids = $('#id_prod').val();

    $.ajax({
      type: 'GET',
      url: "https://private-4639ce-ecommerce56.apiary-mock.com/home",
      
      success: function(data) {

        var content_data="";
        var no = -1;

        $.each(data[0]['data']['productPromo'], function() {

            no++;
            var images = data[0]['data']['productPromo'][no]['imageUrl'];
            var id = data[0]['data']['productPromo'][no]['id'];
            var name = data[0]['data']['productPromo'][no]['title'];
            var price = data[0]['data']['productPromo'][no]['price'];
            var desc = data[0]['data']['productPromo'][no]['description'];
            var loves = data[0]['data']['productPromo'][no]['loved'];

            if (loves == '1'){
                likes = '#f5365c;';
            } else {
                likes = '#ffffff;';
            }

            if (id == ids){

                content_data += "<div class='col-12'>";
                content_data += "<div class='card'>";
                content_data += "<img class='card-img-top' src='"+images+"'>";
                content_data += "<div class='love'>";
                content_data += "<div class='circle3'><i class='ni ni-favourite-28' style='color: "+likes+"'></i></div></div>";
                content_data += "<div class='card-body'>";
                content_data += "<h2><b>"+name+"</b></h2>";
                content_data += "<h5 align='justify'>"+desc+"</h5>";
                content_data += "<table width='100%'>";
                content_data += "<tr>";
                content_data += "<td align='left'><h1 style='color: #fb6340;'><b>"+price+"</b></h1></td>";
                content_data += "<td align='right'><button class='btn btn-kuning' onclick='Beli("+id+")' type='button'>BELI</button></td>";
                content_data += "</tr>";
                content_data += "</table>";
                content_data += "</div>";
                content_data += "</div>";
                content_data += "</div>";
                
            }

        });

        $('#contentprods').html(content_data);

      }

    });

  });

  function Beli(id){

    $.ajax({
       type: 'POST',
       url: "{{ route('beli') }}",
       data: {
            '_token': $('input[name=_token]').val(),
            'prod_id': id
        },
       success: function(data) {

          swal({
            title: "Berhasil",
            text: "Produk Masuk ke Purchase History!",
            icon: "success",
            buttons: false,
            timer: 2000,
        });

        setTimeout(function(){ window.location.reload() }, 1500);

       }

    });

  }

</script>

</body>
</html>