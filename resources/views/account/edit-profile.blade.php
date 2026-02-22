@extends('account.layouts.app')

@section('account.content')
    <div class="flex flex-col shadow rounded-lg p-4 dark:bg-gray-800 bg-white mt-5 lg:mt-0">
        <div class="flex items-center justify-between">
            <h2 class="font-DanaMedium text-lg">اطلاعات حساب کاربری</h2>
        </div>
        <form class="mt-5 grid grid-cols-12 gap-5 child:col-span-12 child:lg:col-span-6"
              action=""
              method="POST"
        >
            @csrf
            <!-- ITEM -->
            <div>
                <label for="input1" class="block text-sm font-DanaMedium text-gray-500 dark:text-gray-300">
                    نام
                </label>
                <div class="mt-3 relative">
                    <input
                        id="input1"
                        type="text"
                        class="block w-full p-2.5 text-base outline dark:outline-none outline-1 -outline-offset-1 placeholder:text-gray-400 transition-all text-gray-800 dark:text-gray-100 dark:bg-gray-900 bg-slate-100 border border-transparent hover:border-slate-200 appearance-none rounded-md outline-none focus:bg-white focus:border-indigo-400 focus:ring-2 focus:ring-indigo-100 dark:focus:ring-blue-400"
                        name="first_name"
                        value="{{ old('first_name', $user->first_name) }}"
                    >
                </div>
                @error('first_name')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <!-- ITEM -->
            <div>
                <label for="input2" class="block text-sm font-DanaMedium text-gray-500 dark:text-gray-300">
                    نام خانوادگی
                </label>
                <div class="mt-3 relative">
                    <input
                        id="input2"
                        type="text"
                        class="block w-full p-2.5 text-base outline dark:outline-none outline-1 -outline-offset-1 placeholder:text-gray-400 transition-all text-gray-800 dark:text-gray-100 dark:bg-gray-900 bg-slate-100 border border-transparent hover:border-slate-200 appearance-none rounded-md outline-none focus:bg-white focus:border-indigo-400 focus:ring-2 focus:ring-indigo-100 dark:focus:ring-blue-400"
                        name="last_name"
                        value="{{ old('last_name', $user->last_name) }}"
                    >
                </div>
                @error('last_name')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <!-- ITEM -->
            <div>
                <label for="input3" class="block text-sm font-DanaMedium text-gray-500 dark:text-gray-300">
                    موبایل
                </label>
                <div class="mt-3 relative">
                    <input
                        id="input3"
                        type="text"
                        class="block w-full p-2.5 text-base outline dark:outline-none outline-1 -outline-offset-1 placeholder:text-gray-400 transition-all text-gray-800 dark:text-gray-100 dark:bg-gray-900 bg-slate-100 border border-transparent hover:border-slate-200 appearance-none rounded-md outline-none focus:bg-white focus:border-indigo-400 focus:ring-2 focus:ring-indigo-100 dark:focus:ring-blue-400"
                        name="mobile"
                        value="{{ old('mobile', $user->mobile) }}"
                    >
                </div>
                @error('mobile')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <!-- ITEM -->
            <div>
                <label for="input4" class="block text-sm font-DanaMedium text-gray-500 dark:text-gray-300">
                    ایمیل
                </label>
                <div class="mt-3 relative">
                    <input
                        id="input4"
                        type="text"
                        class="block w-full p-2.5 text-base outline dark:outline-none outline-1 -outline-offset-1 placeholder:text-gray-400 transition-all text-gray-800 dark:text-gray-100 dark:bg-gray-900 bg-slate-100 border border-transparent hover:border-slate-200 appearance-none rounded-md outline-none focus:bg-white focus:border-indigo-400 focus:ring-2 focus:ring-indigo-100 dark:focus:ring-blue-400"
                        name="email"
                        value="{{ old('email', $user->email) }}"
                    >
                </div>
                @error('email')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <!-- ITEM -->
            <div>
                <label for="input5" class="block text-sm font-DanaMedium text-gray-500 dark:text-gray-300">
                    رمز عبور
                </label>
                <div class="mt-3 relative">
                    <input
                        id="input5"
                        type="password"
                        class="block w-full p-2.5 text-base outline dark:outline-none outline-1 -outline-offset-1 placeholder:text-gray-400 transition-all text-gray-800 dark:text-gray-100 dark:bg-gray-900 bg-slate-100 border border-transparent hover:border-slate-200 appearance-none rounded-md outline-none focus:bg-white focus:border-indigo-400 focus:ring-2 focus:ring-indigo-100 dark:focus:ring-blue-400"
                        name="password"
                    >
                    <small>در صورت تغییر کلمه عبور این فیلد را پر کنید.</small>
                </div>
                @error('password')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mx-auto">
                <button
                    class="w-32 shadow-xl text-sm md:text-base flex gap-x-1.5 items-center justify-center px-2 h-10 md:px-3 text-white bg-blue-600 rounded-xl"
                    type="submit"
                >
                    ذخیره تغییرات
                </button>
            </div>
        </form>
    </div>
@endsection
