@extends('landing-page.layouts.app')
@section('title', 'Tentang Kami | Razen Politik')

@section('content')
<section class="bg-white">
    <main class="flex flex-col gap-12 px-4 py-20 mx-auto md:px-6 max-w-screen-2xl lg:px-24">
        <div class="grid items-center gap-20 md:grid-cols-12 lg:gap-0">
            <div class="md:col-span-10 lg:col-span-6">
            <img class="mx-auto" src="https://polapoli.id/storage/image_uploaded/null" width="80%" alt="Tentang Kami">
            </div>
            <div class="lg:col-span-6 md:col-span-10 lg:pr-16">
            <div class="flex flex-col gap-5">
                <h1 class="text-black text-3xl lg:text-4xl font-bold ">Tentang Kami</h1>
                <p class="text-grey1 text-sm font-medium leading-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. At cupiditate ipsam nobis cumque totam deleniti a odio amet eos, labore et? Placeat, cumque? Modi eaque consequuntur illo blanditiis, accusantium sapiente!</p>
            </div>
            </div>
        </div>
    </main>
</section>
<section class="bg-white">
    <main class="flex flex-col gap-12 px-4 py-20 mx-auto md:px-6 max-w-screen-2xl lg:px-24">
        <div class="grid items-center gap-20 md:grid-cols-12 lg:gap-0">
            <div class="lg:col-span-6 md:col-span-10 lg:pr-16">
            <div class="flex flex-col gap-5">
                <div class="text-lg font-semibold text-left uppercase text-pink">CONNECTION</div>
                <h2 class="text-black text-3xl lg:text-4xl font-bold ">Hubungkan semua kanal komunikasi konstituen anda melalui kami</h2>
            </div>
            </div>
            <div class="md:col-span-10 lg:col-span-6">
            <div class="ant-row" style="margin-left: -12px; margin-right: -12px; row-gap: 24px;"></div>
            </div>
        </div>
    </main>
</section>
@endsection
