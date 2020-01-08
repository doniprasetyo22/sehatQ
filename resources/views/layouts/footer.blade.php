 <!-- Footer -->
  </div>
</div>

<footer id="footer">
    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body bg-iolo">
              <div class="row">
                <table>
                  <tr>
                    <td><a href="/"><button class="btn btn-success">Home</button></a></td>
                    <td><button class="btn btn-success">Cart</button></td>
                    <td><a href="/purchase"><button class="btn btn-success">Profile</button></a></td>
                    <td>
                      <a href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          <button class="btn btn-success">
                          {{ __('Logout') }}
                          </button>
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>

                      <!-- <a href="#"><button class="btn btn-success">Logout</button></a> -->
                    </td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
      </div>
    </div>
</footer>

<!--   Core   -->
<script src="/assets/js/plugins/jquery/dist/jquery.min.js"></script>
<script src="/assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!--   Argon JS   -->
<script src="/js/app.js"></script>
<script src="/assets/js/argon-dashboard.min.js?v=1.1.0"></script>
<script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<script src="https://unpkg.com/swiper/js/swiper.js"></script>
<script src="https://unpkg.com/swiper/js/swiper.min.js"></script>

<script type="text/javascript">
  
  $('#search').on('click', function () {

      $('.row').attr("style","display: none;");
      $('.contentx').attr("style","display: none;");
      $('#sidenav-main').attr("class", "navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white");
      $('#icons').attr("class","ni ni-bold-left");
      $('#icons').attr("style","");

      $('#myUL').attr("style","display: none;");

  });

  $('#icons').on('click', function () {

      $('.row').attr("style","display: block;");
      $('.contentx').attr("style","display: block;");
      $('#sidenav-main').attr("class", "navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-iolo-blue");
      $('#icons').attr("class","ni ni-favourite-28");
      $('#icons').attr("style","color: white;");

      $('#myUL').attr("style","display: none;");

  });

function myFunction() {
    var input, filter, ul, li, a, i, txtValue, data;
    input = document.getElementById("search");

    data = $('#search').val();

    if(data == ""){
      $('#myUL').attr("style","display: none;");
    } else {
      $('#myUL').attr("style","display: block;");
    }
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}


</script>