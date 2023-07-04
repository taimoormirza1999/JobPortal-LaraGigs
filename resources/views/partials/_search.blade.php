<form action="/"class="my-5">
  <div class="relative border-2 border-gray-100 m-4 rounded-lg">
    <div class="absolute top-2 left-3">
      <i class="fa fa-search text-gray-400 z-20 hover:text-gray-500"></i>
    </div>
    <input type="text" name="search" value="{{ $search?$search:null }}" class="text-slate-800 h-10 w-full pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none"
      placeholder="Search Laravel Gigs..." />
    <div class="absolute top-0 right-2 ">
      <button type="submit" class="h-10 w-20 text-white rounded-lg bg-red-500 hover:bg-red-600">
        Search
      </button>
    </div>
  </div>
</form>
