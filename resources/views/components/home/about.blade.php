<!-- ====== About Section Start -->
<section id="about" class="dark:bg-slate-800 pt-20 lg:pt-[120px] pb-12 lg:pb-[90px] overflow-hidden">
  <div class="container">
    <div class="flex flex-wrap justify-between items-center -mx-4">
      <div class="w-full lg:w-6/12 px-4">
        <div class="flex items-center -mx-3 sm:-mx-4">
          <div class="w-full xl:w-1/2 px-3 sm:px-4">
            <div class="py-3 sm:py-4">
              <img
                src="{{ url('/img/me1.png') }}"
                alt=""
                class="rounded-2xl w-full"
              />
            </div>
            <div class="py-3 sm:py-4">
              <img
                src="{{ url('/img/me3.png') }}"
                alt=""
                class="rounded-2xl w-full"
              />
            </div>
          </div>
          <div class="w-full xl:w-1/2 px-3 sm:px-4">
            <div class="my-4 relative z-10">
              <img
                src="{{ url('/img/me2.png') }}"
                alt=""
                class="rounded-2xl w-full"
              />
              <x-about-dots></x-about-dots>
            </div>
          </div>
        </div>
      </div>
      <div class="w-full lg:w-1/2 xl:w-5/12 px-4">
        <div class="mt-10 lg:mt-0">
          <span class="font-semibold text-lg text-primary mb-2 block">
             <blockquote class="text-sm text-gray-500 italic py-2 px-3 border-l-4 border-amber-500">
                 "Opportunities don't happen. You create them."
             </blockquote>
          </span>
          <h2 class="font-bold text-3xl sm:text-4xl dark:text-gray-200 mb-8">
            About Me
          </h2>
          <p class="text-base dark:text-gray-400 mb-8">
            I graduated from Faculty of computer and information In 2021 where I learned a lot of technologies like  HTML , Css , JavaScript , SQL , OOP , Data Structure , C++ , Java , Python , Algorithms and Basics Of Network. <br />
          </p>
          <p class="text-base dark:text-gray-400 mb-8">
            I continue to learn after the collage and join Information Technology Institute ( ITI ) Track Open source for 9 months from 11-2021 to 7-2022 It is awesome company where I learned from it a lot of technologies, and It had the biggest effect to my career and I finished doing good projects in it as individual or in teams.<br />
            I learned from it a lot of technologies like PHP , Laravel , Nodejs , Django ,Restfull API , mysql ,MongoDB ,Responsive/static web design and Git&Github , Reactjs ,bootstrap.<br />
            And during this area I decided to focus on Backend development for many reason and decided to work with <span class="text-amber-500 font-bold">PHP</span>  and <span class="text-amber-500 font-bold">Laravel</span> as a Backend Framework.<br />
          </p>
          <ul class="flex flex-wrap items-center">
            <li>
              <x-button-link href="#portfolio" variant="primary" class="rounded-lg">
                My Projects
              </x-button-link>
            </li>
          </ul>

        </div>
      </div>
    </div>
  </div>
</section>
<!-- ====== About Section End -->
