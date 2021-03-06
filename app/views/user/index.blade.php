@extends('layout')
@section('title')
JobFind - List my Jobs
@stop
@section('content')
	<h2>List my Jobs</h2>
	<ul>
		@foreach ($jobs as $job)
			<li>{{ link_to_route('job.show', $job->title, array($job->id)) }}</li>
		@endforeach
	</ul>
@stop