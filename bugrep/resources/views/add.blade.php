@include('base_beg')
<div class="container">
<form action="/add_send" method="POST" class="form_add">
    <div class="row">
    <input class="form-control" name="bug_name" type="text" placeholder="Nazwa"></div>
    <div class="row">
    <textarea name="desc" placeholder="Opisz Bug-a" class="form-control" id="" rows="10"></textarea></div>
    <div class="row">
    <textarea name="when" placeholder="Kiedy Bug się pojawia" id="" class="form-control"rows="10"></textarea></div>
    <div class="row">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button type="submit" class="btn btn-primary btn-add_send">Dodaj</button></div>
</form>
</div>
@include('base_end')
