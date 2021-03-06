@extends('layouts.master')

@section('title')
    Expensy- Upload
@stop

@section('head')
@stop


@section('content')
    <div class="content-page">
				<!-- Start content -->
				<div class="content">
					<div class="container">

						<!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="page-title">Upload</h4>
                            </div>
                        </div>
                        @if (empty($Success))
                        <form method='POST' action='/upload'>
                            {{ csrf_field() }}
                            date:<input type='date' name='date' value="2016-04-01"><br>
                            category:<select name="category">
                                @foreach ($Categories as $i=>$j)
                                    <option value={{ $i }}>{{ $i }}</option>
                                @endforeach
                            </select><br>
                            transaction:<input type='text' name='item'><br>
                            amount:<input type='number' name="amount"><br>
                            <input type='submit' value='Submit'>
                        </form>
                        @else
                        <h3>Transaction uploaded successfully</h3>
                        <form action="/upload">
                            <input type="submit" value="Upload another transaction" />
                        </form>
                        @endif
                        
                        @if(count($errors) > 0)
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        


                    </div> <!-- container -->

                </div> <!-- content -->
        </div>
@stop


@section('body')
@stop