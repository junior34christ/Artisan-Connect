@extends('layouts.master')
@section('title', '')
@section('content')

    <div class="page-wrapper">
        <!-- main contents -->
        <main id="site__main" class="2xl:ml-[--w-side]  xl:ml-[--w-side-sm] p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]">

            <div class="max-w-3xl mx-auto">


                <div class="box relative rounded-lg shadow-md">

                    <div class="flex md:gap-8 gap-4 items-center md:p-8 p-6 md:pb-4">


                        <div class="relative md:w-20 md:h-20 w-12 h-12 shrink-0">

                            <label for="file" class="cursor-pointer">
                                <img id="img" src="assets/images/avatars/avatar-3.jpg"
                                    class="object-cover w-full h-full rounded-full" alt="" />
                                <input type="file" id="file" class="hidden" />
                            </label>

                            <label for="file"
                                class="md:p-1 p-0.5 rounded-full bg-slate-600 md:border-4 border-white absolute -bottom-2 -right-2 cursor-pointer dark:border-slate-700">

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="md:w-4 md:h-4 w-3 h-3 fill-white">
                                    <path d="M12 9a3.75 3.75 0 100 7.5A3.75 3.75 0 0012 9z" />
                                    <path fill-rule="evenodd"
                                        d="M9.344 3.071a49.52 49.52 0 015.312 0c.967.052 1.83.585 2.332 1.39l.821 1.317c.24.383.645.643 1.11.71.386.054.77.113 1.152.177 1.432.239 2.429 1.493 2.429 2.909V18a3 3 0 01-3 3h-15a3 3 0 01-3-3V9.574c0-1.416.997-2.67 2.429-2.909.382-.064.766-.123 1.151-.178a1.56 1.56 0 001.11-.71l.822-1.315a2.942 2.942 0 012.332-1.39zM6.75 12.75a5.25 5.25 0 1110.5 0 5.25 5.25 0 01-10.5 0zm12-1.5a.75.75 0 100-1.5.75.75 0 000 1.5z"
                                        clip-rule="evenodd" />
                                </svg>

                                <input id="file" type="file" class="hidden" />

                            </label>

                        </div>

                        <div class="flex-1">
                            <h3 class="md:text-xl text-base font-semibold text-black dark:text-white"> Monroe Parker </h3>
                            <p class="text-sm text-blue-600 mt-1 font-normal">@Monroe</p>
                        </div>

                        <button
                            class="inline-flex items-center gap-1 py-1 pl-2.5 pr-3 rounded-full bg-slate-50 border-2 border-slate-100 dark:text-white dark:bg-slate-700"
                            type="button" aria-haspopup="true" aria-expanded="false">
                            <ion-icon name="flash-outline"
                                class="text-base duration-500 group-aria-expanded:rotate-180 md hydrated" role="img"
                                aria-label="chevron down outline"></ion-icon>
                            <span class="font-medium text-sm"> Upgrade </span>
                        </button>
                    </div>

                    <!-- nav tabs -->
                    <div class="relative border-b" tabindex="-1" uk-slider="finite: true">

                        <nav class="uk-slider-container overflow-hidden nav__underline px-6 p-0 border-transparent -mb-px">

                            <ul class="uk-slider-items w-[calc(100%+10px)] !overflow-hidden"
                                uk-switcher="connect: #setting_tab ; animation: uk-animation-slide-right-medium, uk-animation-slide-left-medium">

                                <li class="w-auto pr-2.5"> <a href="#"> Description </a> </li>
                                <li class="w-auto pr-2.5"> <a href="#"> Setting</a> </li>
                                <li class="w-auto pr-2.5"> <a href="#"> Avatare</a> </li>
                                <li class="w-auto pr-2.5"> <a href="#"> Cover Photo</a> </li>
                                <li class="w-auto pr-2.5"> <a href="#"> Invites</a> </li>
                                <li class="w-auto pr-2.5"> <a href="#"> Finish</a> </li>
                                <li class="w-auto pr-2.5"> <a href="#"> Changer le mot de passe </a> </li>

                            </ul>

                        </nav>

                        <a class="absolute -translate-y-1/2 top-1/2 left-0 flex items-center w-20 h-full p-2 py-1 justify-start bg-gradient-to-r from-white via-white dark:from-slate-800 dark:via-slate-800"
                            href="#" uk-slider-item="previous"> <ion-icon name="chevron-back"
                                class="text-2xl ml-1"></ion-icon> </a>
                        <a class="absolute right-0 -translate-y-1/2 top-1/2 flex items-center w-20 h-full p-2 py-1 justify-end bg-gradient-to-l from-white via-white dark:from-slate-800 dark:via-slate-800"
                            href="#" uk-slider-item="next"> <ion-icon name="chevron-forward"
                                class="text-2xl mr-1"></ion-icon> </a>

                    </div>


                    <div id="setting_tab" class="uk-switcher md:py-12 md:px-20 p-6 overflow-hidden text-black text-sm">


                        <!-- tab user basic info -->
                        <div>
                            <form action="{{ route('profile.update') }}" method="POST">
                                @csrf
                                <div class="space-y-6">
                                    <div class="md:flex items-center gap-10">
                                        <label class="md:w-32 text-right"> Nom complet </label>
                                        <div class="flex-1 max-md:mt-4">
                                            <input type="text" name="name" placeholder="Monroe"
                                                class="lg:w-1/2 w-full" required>
                                        </div>
                                    </div>

                                    <div class="md:flex items-center gap-10">
                                        <label class="md:w-32 text-right"> Email </label>
                                        <div class="flex-1 max-md:mt-4">
                                            <input type="email" name="email" placeholder="info@mydomain.com"
                                                class="w-full" required>
                                        </div>
                                    </div>

                                    <div class="md:flex items-start gap-10">
                                        <label class="md:w-32 text-right"> Bio </label>
                                        <div class="flex-1 max-md:mt-4">
                                            <textarea name="bio" class="w-full" rows="5" placeholder="Enter your Bio"></textarea>
                                        </div>
                                    </div>

                                    <div class="md:flex items-center gap-10">
                                        <label class="md:w-32 text-right"> Gender </label>
                                        <div class="flex-1 max-md:mt-4">
                                            <select name="gender" class="!border-0 !rounded-md lg:w-1/2 w-full" required>
                                                <option value="1">Male</option>
                                                <option value="2">Female</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="md:flex items-center gap-10">
                                        <label class="md:w-32 text-right"> Relationship </label>
                                        <div class="flex-1 max-md:mt-4">
                                            <select name="relationship" class="!border-0 !rounded-md lg:w-1/2 w-full"
                                                required>
                                                <option value="0">Aucun</option>
                                                <option value="1">Célibataire</option>
                                                <option value="2">En couple</option>
                                                <option value="3">Marié</option>
                                                <option value="4">Fiancé</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="md:flex items-start gap-10" hidden>
                                        <label class="md:w-32 text-right"> Avatar </label>
                                        <div class="flex-1 flex items-center gap-5 max-md:mt-4">
                                            <img src="assets/images/avatars/avatar-3.jpg" alt=""
                                                class="w-10 h-10 rounded-full">
                                            <button type="submit"
                                                class="px-4 py-1 rounded-full bg-slate-100/60 border dark:bg-slate-700 dark:border-slate-600 dark:text-white">
                                                Change</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex items-center gap-4 mt-16 lg:pl-[10.5rem]">
                                    <button type="button"
                                        class="button lg:px-6 bg-secondary max-md:flex-1">Cancel</button>
                                    <button type="submit"
                                        class="button lg:px-10 bg-primary text-white max-md:flex-1">Save</button>
                                </div>
                            </form>
                        </div>


                        <!-- tab socialinks -->
                        <div>

                            <div class="max-w-md mx-auto">

                                <div class="font-normal text-gray-400">

                                    <div>
                                        <h4 class="text-xl font-medium text-black dark:text-white"> Social Links </h4>
                                        <p class="mt-3 font-normal text-gray-600 dark:text-white">We may still send you
                                            important notifications about your account and content outside of you preferred
                                            notivications settings</p>
                                    </div>

                                    <div class="space-y-6 mt-8">

                                        <div class="flex items-center gap-3">
                                            <div class="bg-blue-50 rounded-full p-2 flex ">
                                                <ion-icon name="logo-facebook" class="text-2xl text-blue-600"></ion-icon>
                                            </div>
                                            <div class="flex-1">
                                                <input type="text" class="w-full"
                                                    placeholder="http://www.facebook.com/myname">
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <div class="bg-pink-50 rounded-full p-2 flex ">
                                                <ion-icon name="logo-instagram" class="text-2xl text-pink-600"></ion-icon>
                                            </div>
                                            <div class="flex-1">
                                                <input type="text" class="w-full"
                                                    placeholder="http://www.instagram.com/myname">
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <div class="bg-sky-50 rounded-full p-2 flex ">
                                                <ion-icon name="logo-twitter" class="text-2xl text-sky-600"></ion-icon>
                                            </div>
                                            <div class="flex-1">
                                                <input type="text" class="w-full"
                                                    placeholder="http://www.twitter.com/myname">
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <div class="bg-red-50 rounded-full p-2 flex ">
                                                <ion-icon name="logo-youtube" class="text-2xl text-red-600"></ion-icon>
                                            </div>
                                            <div class="flex-1">
                                                <input type="text" class="w-full"
                                                    placeholder="http://www.youtube.com/myname">
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <div class="bg-slate-50 rounded-full p-2 flex ">
                                                <ion-icon name="logo-github" class="text-2xl text-black"></ion-icon>
                                            </div>
                                            <div class="flex-1">
                                                <input type="text" class="w-full"
                                                    placeholder="http://www.github.com/myname">
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="flex items-center justify-center gap-4 mt-16">
                                    <button type="submit" class="button lg:px-6 bg-secondery max-md:flex-1">
                                        Cancle</button>
                                    <button type="submit" class="button lg:px-10 bg-primary text-white max-md:flex-1">
                                        Save</button>
                                </div>

                            </div>

                        </div>

                        <!-- tab checkbox -->
                        <div>

                            <div>

                                <div class="md:flex items-start gap-16">
                                    <label class="md:w-32 text-right font-semibold"> Notify me when </label>

                                    <div class="flex-1 space-y-4 interactive-effect max-md:mt-5">

                                        <div>
                                            <label class="inline-flex items-center">
                                                <input class="rounded" type="checkbox" checked name="checkbox1"
                                                    value="3" />
                                                <span class="ml-3"> Someone send me message </span>
                                            </label>
                                        </div>

                                        <div>
                                            <label class="inline-flex items-center">
                                                <input class="rounded" type="checkbox" checked name="checkbox1"
                                                    value="3" />
                                                <span class="ml-3"> Someone liked my photo </span>
                                            </label>
                                        </div>

                                        <div>
                                            <label class="inline-flex items-center">
                                                <input class="rounded" type="checkbox" checked name="checkbox2"
                                                    value="3" />
                                                <span class="ml-3"> Someone shared on my photo </span>
                                            </label>
                                        </div>

                                        <div>
                                            <label class="inline-flex items-center">
                                                <input class="rounded" type="checkbox" checked name="checkbox2"
                                                    value="3" />
                                                <span class="ml-3"> Someone followed me </span>
                                            </label>
                                        </div>

                                        <div>
                                            <label class="inline-flex items-center">
                                                <input class="rounded" type="checkbox" checked name="checkbox2"
                                                    value="3" />
                                                <span class="ml-3"> Someone liked my posts</span>
                                            </label>
                                        </div>

                                        <div>
                                            <label class="inline-flex items-center">
                                                <input class="rounded" type="checkbox" checked name="checkbox2"
                                                    value="3" />
                                                <span class="ml-3"> Someone mentioned me</span>
                                            </label>
                                        </div>

                                        <div>
                                            <label class="inline-flex items-center">
                                                <input class="rounded" type="checkbox" checked name="checkbox2"
                                                    value="3" />
                                                <span class="ml-3"> Someone sent me follow requset</span>
                                            </label>
                                        </div>
                                    </div>

                                </div>

                                <div class="flex items-center justify-center gap-4 mt-16">
                                    <button type="submit" class="button lg:px-6 bg-secondery max-md:flex-1">
                                        Cancle</button>
                                    <button type="submit" class="button lg:px-10 bg-primary text-white max-md:flex-1">
                                        Save</button>
                                </div>

                            </div>

                        </div>

                        <!-- tab toggle options-->
                        <div>

                            <div>

                                <div class="space-y-6">

                                    <div class="md:flex items-start gap-10">

                                        <label class="w-40 text-right font-semibold"> Who can follow me ? </label>

                                        <div class="flex-1 space-y-2 interactive-effect max-md:mt-3">

                                            <div>
                                                <label class="inline-flex items-center">
                                                    <input type="radio" name="radio-s1" checked value="1" />
                                                    <span class="ml-3"> Everyone</span>
                                                </label>
                                            </div>
                                            <div>
                                                <label class="inline-flex items-center">
                                                    <input type="radio" name="radio-s1" value="2" />
                                                    <span class="ml-3"> The People I Follow</span>
                                                </label>
                                            </div>
                                            <div>
                                                <label class="inline-flex items-center">
                                                    <input type="radio" name="radio-s1" value="3" />
                                                    <span class="ml-3"> No body</span>
                                                </label>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="md:flex items-start gap-10">

                                        <label class="md:w-40 text-right font-semibold"> Who can message me ? </label>

                                        <div class="flex-1 space-y-2 interactive-effect max-md:mt-3">

                                            <div>
                                                <label class="inline-flex items-center">
                                                    <input type="radio" name="radio-s2" checked value="1" />
                                                    <span class="ml-3"> Everyone</span>
                                                </label>
                                            </div>
                                            <div>
                                                <label class="inline-flex items-center">
                                                    <input type="radio" name="radio-s2" value="2" />
                                                    <span class="ml-3"> The People I Follow</span>
                                                </label>
                                            </div>
                                            <div>
                                                <label class="inline-flex items-center">
                                                    <input type="radio" name="radio-s2" value="3" />
                                                    <span class="ml-3"> No body</span>
                                                </label>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="md:flex items-start gap-10">

                                        <label class="md:w-40 text-right font-semibold">Status</label>

                                        <div class="flex-1 space-y-2 interactive-effect max-md:mt-3">

                                            <div>
                                                <label class="inline-flex items-center">
                                                    <input type="radio" name="radio-s3" checked value="3" />
                                                    <span class="ml-3"> Yes</span>
                                                </label>
                                            </div>
                                            <div>
                                                <label class="inline-flex items-center">
                                                    <input type="radio" name="radio-s3" value="3" />
                                                    <span class="ml-3"> No</span>
                                                </label>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="md:flex items-start gap-10">

                                        <label class="md:w-40 text-right font-semibold">Show my activities ?</label>

                                        <div class="flex-1 space-y-2 interactive-effect max-md:mt-3">

                                            <div>
                                                <label class="inline-flex items-center">
                                                    <input type="radio" name="radio-s4" checked value="3" />
                                                    <span class="ml-3"> Public</span>
                                                </label>
                                            </div>
                                            <div>
                                                <label class="inline-flex items-center">
                                                    <input type="radio" name="radio-s4" value="3" />
                                                    <span class="ml-3"> Hide</span>
                                                </label>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="flex items-center justify-center gap-4 mt-16">
                                    <button type="submit" class="button lg:px-6 bg-secondery max-md:flex-1">
                                        Cancle</button>
                                    <button type="submit" class="button lg:px-10 bg-primary text-white max-md:flex-1">
                                        Save</button>
                                </div>

                            </div>

                        </div>

                        <!-- tab select dropdown-->
                        <div>

                            <div>

                                <div class="space-y-6 max-w-lg mx-auto font-medium">

                                    <div class="md:flex items-center gap-16 justify-between">
                                        <label class="md:w-40 text-right"> Who can follow me ? </label>
                                        <div class="flex-1 max-md:mt-4">
                                            <select class="w-full !border-0 !rounded-md">
                                                <option value="1">Everyone</option>
                                                <option value="2">People I Follow</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="md:flex items-center gap-16 justify-between">
                                        <label class="md:w-40 text-right"> Who can message me ? </label>
                                        <div class="flex-1 max-md:mt-4">
                                            <select class="w-full !border-0 !rounded-md">
                                                <option value="1">Everyone</option>
                                                <option value="2">People I Follow</option>
                                                <option value="2">No body</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="md:flex items-center gap-16 justify-between">
                                        <label class="md:w-40 text-right"> Show my activities ?</label>
                                        <div class="flex-1 max-md:mt-4">
                                            <select class="w-full !border-0 !rounded-md">
                                                <option value="1">Yes</option>
                                                <option value="2">Now</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="md:flex items-center gap-16 justify-between">
                                        <label class="md:w-40 text-right"> Status </label>
                                        <div class="flex-1 max-md:mt-4">
                                            <select class="w-full !border-0 !rounded-md">
                                                <option value="1">Online</option>
                                                <option value="2">Offline</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="md:flex items-center gap-16 justify-between">
                                        <label class="md:w-40 text-right"> Who can see my tags? </label>
                                        <div class="flex-1 max-md:mt-4">
                                            <select class="w-full !border-0 !rounded-md">
                                                <option value="1">Everyone</option>
                                                <option value="2">People I Follow</option>
                                                <option value="2">No body</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="md:flex items-center gap-16 justify-between">
                                        <label class="md:w-40 text-right"> Allow search engines </label>
                                        <div class="flex-1 max-md:mt-4">
                                            <select class="w-full !border-0 !rounded-md">
                                                <option value="1">Yes</option>
                                                <option value="2">Now</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>

                                <div class="flex items-center justify-center gap-4 mt-16">
                                    <button type="submit" class="button lg:px-6 bg-secondery max-md:flex-1">
                                        Cancle</button>
                                    <button type="submit" class="button lg:px-10 bg-primary text-white max-md:flex-1">
                                        Save</button>
                                </div>

                            </div>

                        </div>

                        <!-- tab Premision -->
                        <div>

                            <div>

                                <div class="max-w-lg mx-auto font-normal text-gray-400 text-sm">

                                    <div>
                                        <h4 class="text-lg font-semibold text-black dark:text-white"> Alerts preferences
                                        </h4>
                                        <p class=" mt-3">We may still send you important notifications about your account
                                            and
                                            content outside of you preferred notivications settings</p>
                                    </div>

                                    <div class="mt-8 md:space-y-8 space-y-4"
                                        uk-scrollspy="target: > div; cls: uk-animation-slide-bottom-medium; delay: 100 ;repeat: true">

                                        <div class="w-full">
                                            <label class="switch flex justify-between items-center cursor-pointer gap-4">
                                                <div
                                                    class="bg-sky-100 text-sky-500 rounded-full p-2 md:flex hidden shrink-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                                    </svg>
                                                </div>
                                                <div class="flex-1 md:pr-8">
                                                    <h4 class="text-base font-medium mb-1.5 text-black dark:text-white">
                                                        Email
                                                        notifications</h4>
                                                    <p class=""> You can receive notifications about important
                                                        updates
                                                        and content directly to your email inbox. </p>
                                                </div>
                                                <input type="checkbox" checked><span
                                                    class="switch-button !relative"></span>
                                            </label>
                                        </div>

                                        <div class="w-full">
                                            <label class="switch flex justify-between items-center cursor-pointer gap-4">
                                                <div
                                                    class="bg-purple-100 text-purple-500 rounded-full p-2 md:flex hidden shrink-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M9 3.75H6.912a2.25 2.25 0 00-2.15 1.588L2.35 13.177a2.25 2.25 0 00-.1.661V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 00-2.15-1.588H15M2.25 13.5h3.86a2.25 2.25 0 012.012 1.244l.256.512a2.25 2.25 0 002.013 1.244h3.218a2.25 2.25 0 002.013-1.244l.256-.512a2.25 2.25 0 012.013-1.244h3.859M12 3v8.25m0 0l-3-3m3 3l3-3" />
                                                    </svg>
                                                </div>
                                                <div class="flex-1 md:pr-8">
                                                    <h4 class="text-base font-medium mb-1.5 text-black dark:text-white">
                                                        web
                                                        notifications</h4>
                                                    <p class=""> You can receive notifications through your
                                                        notifications
                                                        center </p>
                                                </div>
                                                <input type="checkbox"><span class="switch-button !relative"></span>
                                            </label>
                                        </div>

                                        <div class="w-full">
                                            <label class="switch flex justify-between items-center cursor-pointer gap-4">
                                                <div
                                                    class="bg-teal-100 text-teal-500 rounded-full p-2 md:flex hidden shrink-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                                                    </svg>
                                                </div>
                                                <div class="flex-1 md:pr-8">
                                                    <h4 class="text-base font-medium mb-1.5 text-black dark:text-white">
                                                        Phone
                                                        notifications</h4>
                                                    <p class=""> You can receive notifications on your phone, so you
                                                        can
                                                        stay up-to-date even when you’re on the go</p>
                                                </div>
                                                <input type="checkbox" checked><span
                                                    class="switch-button !relative"></span>
                                            </label>
                                        </div>


                                    </div>

                                </div>

                                <div class="flex items-center justify-center gap-4 mt-16">
                                    <button type="submit" class="button lg:px-6 bg-secondery max-md:flex-1">
                                        Cancle</button>
                                    <button type="submit" class="button lg:px-10 bg-primary text-white max-md:flex-1">
                                        Save</button>
                                </div>

                            </div>

                        </div>

                        <!-- tab password-->
                        <div>

                            <div>

                                <div class="space-y-6 max-w-lg mx-auto">

                                    <div class="md:flex items-center gap-16 justify-between max-md:space-y-3">
                                        <label class="md:w-40 text-right"> Current Password </label>
                                        <div class="flex-1 max-md:mt-4">
                                            <input type="password" placeholder="******" class="w-full">
                                        </div>
                                    </div>

                                    <div class="md:flex items-center gap-16 justify-between max-md:space-y-3">
                                        <label class="md:w-40 text-right"> New password </label>
                                        <div class="flex-1 max-md:mt-4">
                                            <input type="password" placeholder="******" class="w-full">
                                        </div>
                                    </div>

                                    <div class="md:flex items-center gap-16 justify-between max-md:space-y-3">
                                        <label class="md:w-40 text-right"> Repeat password </label>
                                        <div class="flex-1 max-md:mt-4">
                                            <input type="password" placeholder="******" class="w-full">
                                        </div>
                                    </div>

                                    <hr class="border-gray-100 dark:border-gray-700">

                                    <div class="md:flex items-center gap-16 justify-between">
                                        <label class="md:w-40 text-right"> Two-factor authentication </label>
                                        <div class="flex-1 max-md:mt-4">
                                            <select class="w-full !border-0 !rounded-md">
                                                <option value="1">Enable</option>
                                                <option value="2">Disable</option>
                                            </select>
                                        </div>
                                    </div>


                                </div>

                                <div class="flex items-center justify-center gap-4 mt-16">
                                    <button type="submit" class="button lg:px-6 bg-secondery max-md:flex-1">
                                        Cancle</button>
                                    <button type="submit" class="button lg:px-10 bg-primary text-white max-md:flex-1">
                                        Save</button>
                                </div>

                            </div>

                        </div>


                    </div>


                </div>


            </div>

        </main>

    </div>
    <!-- open chat box -->
    <div>
        <button type="button"
            class="sm:m-10 m-5 px-4 py-2.5 rounded-2xl bg-gradient-to-tr from-blue-500 to-blue-700 text-white shadow fixed bottom-0 right-0 group flex items-center gap-2">

            <svg class="w-6 h-6 group-aria-expanded:hidden duration-500" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z">
                </path>
            </svg>

            <div class="text-base font-semibold max-sm:hidden"> Chat </div>

            <svg class="w-6 h-6 -mr-1 hidden group-aria-expanded:block" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z"
                    clip-rule="evenodd" />
            </svg>

        </button>
        <div class="bg-white rounded-xl drop-shadow-xl  sm:w-80 w-screen border-t dark:bg-dark3 dark:border-slate-600"
            id="chat__box"
            uk-drop="offset:10;pos: bottom-right; animate-out: true; animation: uk-animation-scale-up uk-transform-origin-bottom-right; mode: click">

            <div class="relative">
                <div class="p-5">
                    <h1 class="text-lg font-bold text-black"> Chats </h1>
                </div>

                <!-- search input defaul is hidden -->
                <div class="bg-white p-3 absolute w-full top-11 border-b flex gap-2 hidden dark:border-slate-600 dark:bg-slate-700 z-10"
                    uk-scrollspy="cls:uk-animation-slide-bottom-small ; repeat: true; duration:0" id="search__chat">

                    <div class="relative w-full">
                        <input type="text" class="w-full rounded-3xl dark:!bg-white/10" placeholder="Search">

                        <button type="button"
                            class="absolute  right-0  rounded-full shrink-0 px-2 -translate-y-1/2 top-1/2"
                            uk-toggle="target: #search__chat ; cls: hidden">

                            <ion-icon name="close-outline" class="text-xl flex"></ion-icon>
                        </button>
                    </div>

                </div>

                <!-- button actions -->
                <div class="absolute top-0 -right-1 m-5 flex gap-2 text-xl">
                    <button uk-toggle="target: #search__chat ; cls: hidden">
                        <ion-icon name="search-outline"></ion-icon>
                    </button>
                    <button uk-toggle="target: #chat__box ; cls: uk-open">
                        <ion-icon name="close-outline"></ion-icon>
                    </button>
                </div>

                <!-- tabs -->
                <div class="page-heading bg-slat e-50 ">

                    <nav class="nav__underline -mt-7 px-5">

                        <ul class="group"
                            uk-switcher="connect: #chat__tabs ; animation: uk-animation-slide-right-medium, uk-animation-slide-left-medium">

                            <li> <a href="#"
                                    class="inline-block py-[18px] border-b-2 border-transparent aria-expanded:text-black aria-expanded:border-black aria-expanded:dark:text-white aria-expanded:dark:border-white">
                                    Friends </a> </li>
                            <li> <a href="#"> Groups </a> </li>

                        </ul>

                    </nav>

                </div>

                <!-- tab 2 optional -->
                <div class="grid grid-cols-2 px-3 py-2 bg-slate-50  -mt-12 relative z-10 text-sm border-b  hidden"
                    uk-switcher="connect: #chat__tabs; toggle: * > button ; animation: uk-animation-slide-right uk-animation-slide-top">
                    <button class="bg-white shadow rounded-md py-1.5"> Friends </button>
                    <button> Groups </button>
                </div>

                <!-- chat list -->
                <div class="uk-switcher overflow-hidden rounded-xl -mt-8" id="chat__tabs">

                    <!-- tab list 1 -->
                    <div class="space-y -m t-5 p-3 text-sm font-medium h-[280px] overflow-y-auto">

                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-1.jpg" alt="" class="w-7 rounded-full">
                                <div> Jesse Steeve </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-2.jpg" alt="" class="w-7 rounded-full">
                                <div> John Michael </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-3.jpg" alt="" class="w-7 rounded-full">
                                <div> Monroe Parker </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-5.jpg" alt="" class="w-7 rounded-full">
                                <div> James Lewis </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-4.jpg" alt="" class="w-7 rounded-full">
                                <div> Martin Gray </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-6.jpg" alt="" class="w-7 rounded-full">
                                <div> Alexa stella </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-1.jpg" alt="" class="w-7 rounded-full">
                                <div> Jesse Steeve </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-2.jpg" alt="" class="w-7 rounded-full">
                                <div> John Michael </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-3.jpg" alt="" class="w-7 rounded-full">
                                <div> Monroe Parker </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-5.jpg" alt="" class="w-7 rounded-full">
                                <div> James Lewis </div>
                            </div>
                        </a>

                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-4.jpg" alt="" class="w-7 rounded-full">
                                <div> Martin Gray </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-6.jpg" alt="" class="w-7 rounded-full">
                                <div> Alexa stella </div>
                            </div>
                        </a>


                    </div>

                    <!-- tab list 2 -->
                    <div class="space-y -m t-5 p-3 text-sm font-medium h-[280px] overflow-y-auto">

                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-1.jpg" alt="" class="w-7 rounded-full">
                                <div> Jesse Steeve </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-2.jpg" alt="" class="w-7 rounded-full">
                                <div> John Michael </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-3.jpg" alt="" class="w-7 rounded-full">
                                <div> Monroe Parker </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-5.jpg" alt="" class="w-7 rounded-full">
                                <div> James Lewis </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-4.jpg" alt="" class="w-7 rounded-full">
                                <div> Martin Gray </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-6.jpg" alt="" class="w-7 rounded-full">
                                <div> Alexa stella </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-1.jpg" alt="" class="w-7 rounded-full">
                                <div> Jesse Steeve </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-2.jpg" alt="" class="w-7 rounded-full">
                                <div> John Michael </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-3.jpg" alt="" class="w-7 rounded-full">
                                <div> Monroe Parker </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-5.jpg" alt="" class="w-7 rounded-full">
                                <div> James Lewis </div>
                            </div>
                        </a>

                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-4.jpg" alt="" class="w-7 rounded-full">
                                <div> Martin Gray </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-6.jpg" alt="" class="w-7 rounded-full">
                                <div> Alexa stella </div>
                            </div>
                        </a>


                    </div>

                </div>


            </div>

            <div class="w-3.5 h-3.5 absolute -bottom-2 right-5 bg-white rotate-45 dark:bg-dark3"></div>
        </div>
    </div>

@endsection
