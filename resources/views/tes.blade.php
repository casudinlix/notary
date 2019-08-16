
@section('content')
<style>
.responsive-container {
position: relative;
overflow: hidden;
padding-top: 56.25%;
}
 
.responsive-iframe {
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
border: 0;
}
</style>
<section id="content" class="animated fadeIn ">

    <div class="topbar-menu row ">
        <iframe src="https://apis.atrbpn.go.id/layanan" height="2000" width="1260" class=""></iframe>

        </div>

</section>
<script>
  function resizeIframe(obj) {
    obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
  }
</script>
@endsection
