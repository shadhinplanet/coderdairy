@extends('layouts.dashboard')

@section('content')

    <!-- General Report -->
    <div class="grid gap-6 xl:grid-cols-1">
        <!-- Sales Overview -->
        <div class="card mt-6">
            <!-- header -->
            <div class="p-5 border-b flex justify-between items-center">
                <h2 class="text-xl">Erro on migration</h2>
                <a href="{{ route('problem.index') }}" class="btn-shadow">Back</a>
            </div>
            <!-- end header -->

            <!-- problem info -->
            <div class="grid grid-cols-4 gap-6 xl:grid-cols-2 p-6 pb-2 pt-0">

                 <!-- card -->
                 <div class="card mt-6 xl:mt-1">
                    <div class="p-2 flex items-center">

                        <div class="px-3 py-2 rounded bg-gray-200 text-black mr-3">
                            <i class="fad fa-comments"></i>
                        </div>

                        <div class="flex flex-col">
                            <h1 class="font-semibold text-sm mb-1">Published on</h1>
                            <p class="text-xs">Apr 14, 2022</p>
                        </div>


                    </div>
                </div>
                <!-- end card -->

                <!-- card -->
                <div class="card mt-6 xl:mt-1">
                    <div class="p-2  flex items-center">

                        <div class="px-3 py-2 rounded bg-gray-200 text-black mr-3">
                            <i class="fad fa-user"></i>
                        </div>

                        <div class="flex flex-col">
                            <h1 class="font-semibold text-sm mb-1">Published by</h1>
                            <p class="text-xs capitalize">Shanto</p>
                        </div>

                    </div>
                </div>
                <!-- end card -->

                <!-- card -->
                <div class="card mt-6 xl:mt-1">
                    <div class="p-2  flex items-center">

                        <div class="px-3 py-2 rounded bg-gray-200 text-black mr-3">
                            <i class="fad fa-eye"></i>
                        </div>

                        <div class="flex flex-col">
                            <h1 class="font-semibold text-sm mb-1">Visiblity</h1>
                            <p class="text-xs capitalize">Public</p>
                        </div>

                    </div>
                </div>
                <!-- end card -->


                <!-- card -->
                <div class="card mt-6 xl:mt-1">
                    <div class="p-2  flex items-center">

                        <div class="px-3 py-2 rounded bg-gray-200 text-black mr-3">
                            <i class="fad fa-tag"></i>
                        </div>

                        <div class="flex flex-col">
                            <h1 class="font-semibold text-sm mb-1">Category</h1>
                            <p class="text-xs">PHP</p>
                        </div>


                    </div>
                </div>
                <!-- end card -->

            </div>
            <!-- end problem info -->

              <!-- card -->
              <div class="card mx-5">
                <div class="p-2  flex items-center">

                    <div class="px-3 py-2 rounded bg-gray-200 text-black mr-3">
                        <i class="fad fa-tags"></i>
                    </div>

                    <div class="flex flex-col">
                        <h1 class="font-semibold text-sm mb-1">Tags</h1>
                        <div class="space-x-2">
                            <a class="text-sm border py-1 px-2 rounded-sm hover:bg-teal-200 duration-200" href="#">PHP</a>
                        <a class="text-sm border py-1 px-2 rounded-sm hover:bg-teal-200 duration-200" href="#">PHP</a>
                        <a class="text-sm border py-1 px-2 rounded-sm hover:bg-teal-200 duration-200" href="#">PHP</a>
                        </div>
                    </div>


                </div>
            </div>
            <!-- end card -->

            <!-- body -->
            <div class="flex justify-between p-5">
                <div class="p-0 mr-3">
                    <div class="mt-10 mb-10 items-center">
                        <p class="text-black">Amore sales in comparison to last month.more sales in comparison to last month.more sales in comparison to last month.more sales in comparison to last month.more sales in comparison to last month.% more sales in comparison to last month.</p>
                    </div>
                </div>

                <div class="w-8/12">
                    <div class="grid gap-2 grid-flow-row grid-cols-3">
                        <a href="https://picsum.photos/1024" data-lity data-lity-desc="Optional caption">
                            <img src="https://picsum.photos/150" class="m-1" alt="">
                        </a>
                        <a href="https://picsum.photos/1024" data-lity data-lity-desc="Optional caption">
                           <img src="https://picsum.photos/150" class="m-1" alt="">
                        </a>
                        <a href="https://picsum.photos/1024" data-lity data-lity-desc="Optional caption">
                           <img src="https://picsum.photos/150" class="m-1" alt="">
                        </a>
                        <a href="https://picsum.photos/1024" data-lity data-lity-desc="Optional caption">
                           <img src="https://picsum.photos/150" class="m-1" alt="">
                        </a>
                        <a href="https://picsum.photos/1024" data-lity data-lity-desc="Optional caption">
                           <img src="https://picsum.photos/150" class="m-1" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <!-- end body -->
        </div>
        <!-- end Sales Overview -->

        <!-- Sales Overview -->
        <div class="card mt-6">
            <!-- header -->
            <div class="flex flex-row justify-between accordion">
                <h1 class="h6">Problem Solution # </h1>
            </div>
            <!-- end header -->

            <!-- body -->
            <div class="grid grid-cols-2 gap-6 lg:grid-cols-1 panel p-0">
                <div class="p-6">
                    <div class="mb-10 items-center">
                        <h4 class="h4">Solution</h4>
                        <p class="text-black">Amore sales in comparison to last month.more sales in comparison to last month.more sales in comparison to last month.more sales in comparison to last month.more sales in comparison to last month.% more sales in comparison to last month.</p>
                    </div>
                </div>

                <div class="pt-6 ">
                    <div class="problem-screenshort ">
                        <a href="https://picsum.photos/800/800" data-lity="gallery" data-caption="Optional caption">
                            <img src="https://picsum.photos/800/800" class="m-1" alt="">
                        </a>
                        <a href="https://picsum.photos/800/800" data-lity="gallery" data-caption="Optional caption">
                            <img src="https://picsum.photos/800/800" class="m-1" alt="">
                        </a>
                        <a href="https://picsum.photos/800/800" data-lity="gallery" data-caption="Optional caption">
                            <img src="https://picsum.photos/800/800" class="m-1" alt="">
                        </a>
                        <a href="https://picsum.photos/800/800" data-lity="gallery" data-caption="Optional caption">
                            <img src="https://picsum.photos/800/800" class="m-1" alt="">
                        </a>
                        <a href="https://picsum.photos/800/800" data-lity="gallery" data-caption="Optional caption">
                            <img src="https://picsum.photos/800/800" class="m-1" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <!-- end body -->
        </div>
        <!-- end Sales Overview -->

        <!-- Sales Overview -->
        <div class="card">
            <!-- header -->
            <div class="flex flex-row justify-between accordion">
                <h1 class="h6">Problem Solution # </h1>
            </div>
            <!-- end header -->

            <!-- body -->
            <div class="grid grid-cols-2 gap-6 lg:grid-cols-1 panel p-0">
                <div class="p-6">
                    <div class="mb-10 items-center">
                        <h4 class="h4">Solution</h4>
                        <p class="text-black">Amore sales in comparison to last month.more sales in comparison to last month.more sales in comparison to last month.more sales in comparison to last month.more sales in comparison to last month.% more sales in comparison to last month.</p>
                    </div>
                </div>

                <div class="pt-6 ">
                    <div class="problem-screenshort ">
                        <a href="https://picsum.photos/800/800" data-lity="gallery" data-caption="Optional caption">
                            <img src="https://picsum.photos/800/800" class="m-1" alt="">
                        </a>
                        <a href="https://picsum.photos/800/800" data-lity="gallery" data-caption="Optional caption">
                            <img src="https://picsum.photos/800/800" class="m-1" alt="">
                        </a>
                        <a href="https://picsum.photos/800/800" data-lity="gallery" data-caption="Optional caption">
                            <img src="https://picsum.photos/800/800" class="m-1" alt="">
                        </a>
                        <a href="https://picsum.photos/800/800" data-lity="gallery" data-caption="Optional caption">
                            <img src="https://picsum.photos/800/800" class="m-1" alt="">
                        </a>
                        <a href="https://picsum.photos/800/800" data-lity="gallery" data-caption="Optional caption">
                            <img src="https://picsum.photos/800/800" class="m-1" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <!-- end body -->
        </div>
        <!-- end Sales Overview -->

        <!-- Sales Overview -->
        <div class="card">
            <!-- header -->
            <div class="flex flex-row justify-between accordion">
                <h1 class="h6">Problem Solution # </h1>
            </div>
            <!-- end header -->

            <!-- body -->
            <div class="grid grid-cols-2 gap-6 lg:grid-cols-1 panel p-0">
                <div class="p-6">
                    <div class="mb-10 items-center">
                        <h4 class="h4">Solution</h4>
                        <p class="text-black">Amore sales in comparison to last month.more sales in comparison to last month.more sales in comparison to last month.more sales in comparison to last month.more sales in comparison to last month.% more sales in comparison to last month.</p>
                    </div>
                </div>

                <div class="pt-6 ">
                    <div class="problem-screenshort ">
                        <a href="https://picsum.photos/800/800" data-lity="gallery" data-caption="Optional caption">
                            <img src="https://picsum.photos/800/800" class="m-1" alt="">
                        </a>
                        <a href="https://picsum.photos/800/800" data-lity="gallery" data-caption="Optional caption">
                            <img src="https://picsum.photos/800/800" class="m-1" alt="">
                        </a>
                        <a href="https://picsum.photos/800/800" data-lity="gallery" data-caption="Optional caption">
                            <img src="https://picsum.photos/800/800" class="m-1" alt="">
                        </a>
                        <a href="https://picsum.photos/800/800" data-lity="gallery" data-caption="Optional caption">
                            <img src="https://picsum.photos/800/800" class="m-1" alt="">
                        </a>
                        <a href="https://picsum.photos/800/800" data-lity="gallery" data-caption="Optional caption">
                            <img src="https://picsum.photos/800/800" class="m-1" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <!-- end body -->
        </div>
        <!-- end Sales Overview -->

        <!-- Sales Overview -->
        <div class="card">
            <!-- header -->
            <div class="flex flex-row justify-between accordion">
                <h1 class="h6">Problem Solution # </h1>
            </div>
            <!-- end header -->

            <!-- body -->
            <div class="grid grid-cols-2 gap-6 lg:grid-cols-1 panel p-0">
                <div class="p-6">
                    <div class="mb-10 items-center">
                        <h4 class="h4">Solution</h4>
                        <p class="text-black">Amore sales in comparison to last month.more sales in comparison to last month.more sales in comparison to last month.more sales in comparison to last month.more sales in comparison to last month.% more sales in comparison to last month.</p>
                    </div>
                </div>

                <div class="pt-6 ">
                    <div class="problem-screenshort ">
                        <a href="https://picsum.photos/800/800" data-lity="gallery" data-caption="Optional caption">
                            <img src="https://picsum.photos/800/800" class="m-1" alt="">
                        </a>
                        <a href="https://picsum.photos/800/800" data-lity="gallery" data-caption="Optional caption">
                            <img src="https://picsum.photos/800/800" class="m-1" alt="">
                        </a>
                        <a href="https://picsum.photos/800/800" data-lity="gallery" data-caption="Optional caption">
                            <img src="https://picsum.photos/800/800" class="m-1" alt="">
                        </a>
                        <a href="https://picsum.photos/800/800" data-lity="gallery" data-caption="Optional caption">
                            <img src="https://picsum.photos/800/800" class="m-1" alt="">
                        </a>
                        <a href="https://picsum.photos/800/800" data-lity="gallery" data-caption="Optional caption">
                            <img src="https://picsum.photos/800/800" class="m-1" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <!-- end body -->
        </div>
        <!-- end Sales Overview -->
    </div>
    <!-- End General Report -->

@endsection
