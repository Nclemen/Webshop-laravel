@extends('layouts.app')


@section('content')
                <div class="row">
                        <div class="col-12 text-center">
                                <form action="" method="post" class="form-signin">
                                    <label for="email">email</label>
                                    <input class="form-control" type="email" name="email" id="inputEmail" placeholder="enter your email">
                                    <label for="password">password</label>
                                    <input class="form-control" type="password" name="password" id="inputPassword" placeholder="enter your pasword">
                                </form>
                        </div>
                </div>
@endsection