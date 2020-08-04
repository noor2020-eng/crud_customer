@include('teams.header')
@include('teams.side')
<div class="main-content">
<h4 class="text-center">Details table</h4>

<table class="table table-bordered">
    <thead>
    <tr>
        <th>Id</th>
        <th>img</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th> Edit</th>
        <th>delete</th>
    </tr>
    </thead>

    <tbody>

@yield('tbody')

    </tbody>
</table>

@include('teams.footer')

