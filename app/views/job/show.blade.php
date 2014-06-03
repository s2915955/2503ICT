@extends('layout')
@section('title')
JobFind - {{{ $job->title }}}
@stop
@section('subheading')
{{{ $job->title }}}
@stop
@section('content')
	@if (Auth::check())
		@if $u_id = Auth::user()->id AND $job = DB::table('jobs')->where('user_id', = $u_id
			<p>{{{ $job->description }}}</p>
			<b>Job location: </b>
			<p>{{{ $job->location }}}</p>
			<b>Salary per anum: </b>
			<p>{{{ $job->salary }}}</p>
			<b>Application opening: </b>
			<p>{{{ $job->start_date }}}</p>
			<b>Application deadline: </b>
			<p>{{{ $job->end_date }}}</p>
    	<p>{{ link_to_route('application.create', 'Apply for Job') }}</p>
			<p>{{ link_to_route('job.edit', 'Edit', array($job->id)) }}</p>
			{{ Form::open(array('method' => 'DELETE', 'route' => array('job.destroy', $job->id))) }}
			{{ Form::submit('Remove Job', array('class' => 'btn btn-danger')) }}
			{{ Form::close() }}
		@else
			<b>Employer:</b>
			<p>EMPLOYER NAME</p>
			<b>Description:</b>
			<p>{{{ $job->description }}}</p>
			<b>Job location:</b>
			<p>{{{ $job->location }}}</p>
			<b>Salary per anum:</b>
			<p>${{{ $job->salary }}}</p>
			<b>Application opening:</b>
			<p>{{{ $job->start_date }}}</p>
			<b>Application deadline:</b>
			<p>{{{ $job->end_date }}}</p>
			<br>
			<div id="error">You must be logged in to Apply.</div>Don't have an account? Create one <a href="{{ route('user.create') }}">here</a>.
		@endif

@stop