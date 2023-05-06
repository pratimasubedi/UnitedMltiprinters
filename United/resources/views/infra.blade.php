@extends('home-master')
@section('content')


<div class="container infra-wrapper">
  <h2>Our Infrastructure</h2>
  <h4>"Heidelberg, Muller Martini, Hunkler & Many More"</h4>
  <p>
Imagine if your customers weren't just numbers on a spreadsheet but real people who you engage with on an ongoing basis, collecting feedback may not be only a business obligation but a window to the changing world of taste, time, and aspirations. Real people, higher response rates and actionable insight into printing - all of these give you the context you need to improve the entire customer lifecycle.</p>
</div>
<div class="container-fluid infra-coll">
<button type="button" class="collapsible">PRE-PRESS</button>
<div class="content">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

</div>
<div class="container-fluid infra-coll">
<button type="button" class="collapsible">PRODUCTION</button>
<div class="content">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

</div>
<div class="container-fluid infra-coll">
<button type="button" class="collapsible">
Post Production</button>
<div class="content">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

</div>

<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>



	@endsection