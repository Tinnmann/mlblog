<h2 class="font-bold text-xlg mb-4">Members</h2>
<ul>
	@foreach ($users as $user)
	<li class="mb-4">
		<div class="flex items center text-sm">
			<img src="https://i.pravatar.cc/50?u={{ $user->email }}" alt="" class="mr-2">
			{{ $user->name }}
		</div>
	</li>
	@endforeach
</ul>