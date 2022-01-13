<x-app-layout>
  <x-slot name="header">
      <div class="flex justify-between">
        <h2 class="text-red-600">
          User List
        </h2>
      </div>

      <table class="w-full whitespace-nowrap relative">
        <thead class="select-none">
          <tr>
            <th width="100px" height="50px" style="text-align: left">ID</th>
            <th width="200px" style="text-align: left">Mame</th>
            <th width="200px" style="text-align: left">Email</th>
            <th width="200px" style="text-align: left">Created At</th>
            <th width="200px" style="text-align: left">Updated At</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
              <tr>
                <td  class="text-red-600"><a href="user/{{ $user->id }}/edit">{{ $user->id }}</a></td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at }}</td>
                <td>{{ $user->updated_at }}</td>
              </tr>
          @endforeach
        </tbody>
      </table>
      <div class="mt-5">
        {{ $users->links() }}
      </div>
  </x-slot>
</x-app-layout>
