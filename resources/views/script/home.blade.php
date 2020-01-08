<script type="text/javascript">

	$(function() {  

		$.ajax({
		  type: 'GET',
		  url: "https://private-4639ce-ecommerce56.apiary-mock.com/home",
		  
		  success: function(data) {

		    var content_data="";
		    var no = -1;

		    $.each(data[0]['data']['category'], function() {

		        no++;
		        var images = data[0]['data']['category'][no]['imageUrl'];
		        var id = data[0]['data']['category'][no]['id'];
		        var name = data[0]['data']['category'][no]['name'];

		        content_data += "<div class='swiper-slide shadow' style='width: 150px; height: 150px; margin-right: 30px;'>";
		        content_data += "<table width='100%'>";
		        content_data += "<tr><td>"
		        content_data += "<img width='50%' src="+images+">";
		        content_data += "</td></tr>"
		        content_data += "<tr><td><h4>"+name+"</h4></td></tr>";
		        content_data += "</table>";
		        content_data += "</div>";

		    });

		    $('#getcontent').html(content_data);

		  }

		});

		$.ajax({
		  type: 'GET',
		  url: "https://private-4639ce-ecommerce56.apiary-mock.com/home",
		  
		  success: function(data) {

		    var content_data="";
		    var no = -1;
		    var likes = "";

		    $.each(data[0]['data']['productPromo'], function() {

		        no++;
		        var images = data[0]['data']['productPromo'][no]['imageUrl'];
		        var id = data[0]['data']['productPromo'][no]['id'];
		        var name = data[0]['data']['productPromo'][no]['title'];
		        var price = data[0]['data']['productPromo'][no]['price'];
		        var loves = data[0]['data']['productPromo'][no]['loved'];

		        if (loves == '1'){
		            likes = '#f5365c;';
		        } else {
		            likes = '#ffffff;';
		        }

		        content_data += "<div class='col-12'>";
		        content_data += "<div class='card shadow'>";
		        content_data += "<a href='/produk/"+id+"'>";
		        content_data += "<img class='card-img-top' width='20%' src='"+images+"'>";
		        content_data += "<div class='love2'>";
		        content_data += "<div class='circle4'><i class='ni ni-favourite-28' style='color: "+likes+"'></i></div>";
		        content_data += "</div>";
		        content_data += "<div class='card-body'>";
		        content_data += "<h2> <b>"+name+"</b></h2>";
		        content_data += "<h3 style='color: #fb6340;'><b>"+price+"</b></h3>";
		        content_data += "</div>";
		        content_data += "</a>";
		        content_data += "</div>";
		        
		        content_data += "</div>";

		    });

		    $('#getprod').html(content_data);

		  }

		});

		});

</script>