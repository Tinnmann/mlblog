<h3 class="font-bold text-xlg mb-4">Members</h3>
<ul>

	@foreach ($users as $user)
	<li class="mb-4">
		<div class="flex items center text-sm">
			<img src="{{ $user->avatar }}" alt="pic" class="mr-2">
			{{ $user->name }}
		</div>
	</li>
	@endforeach
</ul>