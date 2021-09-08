@extends('layouts.master')
@section('head.title')
Biểu mẫu, sổ sách
@stop
@section('body.content')
<div class="latest-post-wrap">
	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead class="bg-success text-white fz-16">
				<tr>
					<th class="text-left">I - Giành cho<b> Giáo viên, CBCNV</b></th>
					@auth
					<th style="width: 15%">Thao tác</th>
					@endauth
				</tr>
			</thead>
			<tbody>
				@php
				$i = 1;
				@endphp
				@foreach ($bieumau_gv as $bieumau1)
				<tr>
					<td class="text-justify"><a href="{{ $bieumau1->url }}" target="_blank">{{ $i }}. {{ $bieumau1->name }} <i class="text-danger fz-12">({{ $bieumau1->created_at->format('d/m/Y') }})</i></a></td>
					@auth
					<td class="text-center"><a href="{{ route('bieumau.edit',$bieumau1->slug) }}"><i class="fa fa-pencil-square-o text-info"></i></a>
						<a href="{{ route('bieumau.destroy',$bieumau1->id) }}"><i class="fa fa-trash-o text-danger"></i></a></td>
						@endauth
					</tr>
					@php
					$i++;
					@endphp
					@endforeach
				</tbody>
			</table>
		</div>

		<table class="table table-bordered table-hover">
			<thead class="bg-primary text-white fz-16">
				<tr>
					<th class="text-left">II - Giành cho<b> Học sinh, Sinh viên</b></th>
					@auth
					<th style="width: 15%">Thao tác</th>
					@endauth
				</tr>
			</thead>
			<tbody>
				@php
				$j = 1;
				@endphp
				@foreach ($bieumau_hssv as $bieumau2)
				<tr>
					<td class="text-justify"><a href="{{ $bieumau2->url }}" target="_blank">{{ $j }}. {{ $bieumau2->name }} <i class="text-danger fz-12">({{ $bieumau2->created_at->format('d/m/Y') }})</i></a></td>
					@auth
					<td class="text-center"><a href="{{ route('bieumau.edit',$bieumau2->slug) }}"><i class="fa fa-pencil-square-o text-info"></i></a>
						<a href="{{ route('bieumau.destroy',$bieumau2->id) }}"><i class="fa fa-trash-o text-danger"></i></a></td>
						@endauth
					</tr>
					@php
					$j++;
					@endphp
					@endforeach
				</tbody>
			</table>
		</div>	
		@stop