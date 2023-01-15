<?php
get_header();
?>
 <div class="">

        <div class="font-sans isolate flex flex-col max-w-5xl mx-auto text-white">

            <!-- Intro section -->
            <section>
                <div class="text-white text-center md:text-left space-y-4 mb-12 px-6">
                    <h1 class="text-center text-4xl font-bold text-white mb-4">Persinformatie</h1>
                    <p>Preipop is een gratis festival dat sinds 2007 jaarlijks in februari wordt gehouden op het pand van
                        Cleopatra. Preipop biedt een podium aan nieuw talent uit Nederland, en de omgeving van Groningen in
                        het bijzonder.</p>
                    <p>Wat het festival bijzonder maakt is haar brede programmering. Van intieme singer/songwriter muziek
                        tot stampende rock, van relaxte jazz tot energieke ska: op Preipop vind je het allemaal. Naast
                        beginnend talent staan er op elke editie ook een aantal wat meer gevestigde namen. Zo speelden op de
                        allereerste editie The Heavens Devils, een band die al meerdere popprijzen heeft gewonnen. Andere
                        hoogtepunten waren o.a. the Swains (2008), A Silent Express (2010) en A Liquid Landscape (2011).</p>
                    <p>Voor meer informatie kunt u contact opnemen via info@preipop.nl.</p>
                </div>
            </section>

            <!-- Bands -->
            <section class=" w-full max-w-screen-2xl mx-auto mb-12">
                
                <h1 class="text-center text-4xl font-bold text-white mb-4">Line-up</h1>
                <div class="max-w-5xl md:mx-auto grid grid-cols-12 mx-6 md:px-12 gap-6">
                    
                    <div class="col-span-12 sm:col-span-6   text-black relative rounded-lg" x-data="{ bandOpen: false }">
                        <button class="w-full  md:grid md:grid-cols-1 hover:cursor-pointer group rounded-lg relative" @click="bandOpen = !bandOpen; anyArtistOpen = !anyArtistOpen" x-transtion>
                            <div class=" overflow-hidden max-h-max">
                            <img src="https://preipop.nl/preipop_img/dr-justice.png" class="object-cover w-full group-hover:scale-105 transition duration-300 rounded-lg opacity-75 max-h-fit">
                            </div>
                            <div class="bg-black flex justify-center group-hover:bg-gray-900 py-4 ">
                                
                                <a class="text-white text-xl md:text-3xl font-extrabold p-2 flex justify-center items-center">Dr. Justice and the Smooth Operators</a>
                            </div>
                            <div class="absolute -inset-2 bg-gradient-to-r from-green-900 to-purple-900 blur-xl rounded-lg -z-10"></div>
                        </button>
                        <div class="fixed mx-4 inset-0 h-screen bg-gray-900 z-50 bg-opacity-95" x-show="bandOpen" x-transition.duration.400ms.opacity>
                            <div class="flex justify-center items-center w-full h-full relative">
                                <div class=" bg-gray-900 rounded-3xl max-w-5xl relative" @click.away="bandOpen = false; anyArtistOpen = false">
                                    <div class="grid sm:grid-cols-2 p-8 overflow-hidden gap-6">
                                    <div class="overflow-hidden flex">
                                        <img src="https://preipop.nl/preipop_img/dr-justice.png" class="object-cover h-fit">
                                    </div>
                                    <div class="text-white">
                                        <h1 class="text-3xl font-bold">Dr. Justice and the Smooth Operators</h1>
                                        <p>Deze ‘Future Funk’ is een mix van Disco, Electronic, Pop, en Funk. Catchy dansbare songs, die je af en toe laten weg-glibberen of volledig omver blazen. Tight chops, drie geweldige achtergrondzangeressen, slappy bas, keytar en een ever-energetic performance.</p>
                                    </div>
                                    </div>
                                    <div class="absolute -inset-2 bg-gradient-to-r from-green-900 to-purple-900 blur-xl rounded-lg -z-10"></div>
                                </div>
                                <button class="absolute top-6 right-6 text-white text-5xl" @click="bandOpen = false; anyArtistOpen = false">X</button>
                            </div>
                        </div>
                
                    </div>
                    <div class="col-span-12 sm:col-span-6 text-black relative rounded-lg" x-data="{ bandOpen: false }">
                        <button class="w-full  grid grid-cols-1 hover:cursor-pointer group rounded-lg relative" @click="bandOpen = !bandOpen; anyArtistOpen = !anyArtistOpen" x-transtion>
                            <div class=" overflow-hidden max-h-max">
                            <img src="https://preipop.nl/preipop_img/Sundown-escape.png" class=" object-cover w-full group-hover:scale-105 transition duration-300 rounded-lg opacity-75 max-h-fit">
                            </div>
                            <div class="bg-black flex justify-center group-hover:bg-gray-900 py-4 h-full flex-grow">
                                
                                <a class="text-white text-3xl font-extrabold p-2 flex justify-center items-center">Sundown Escape</a>
                            </div>
                            <div class="absolute -inset-2 bg-gradient-to-r from-green-900 to-purple-900 blur-xl rounded-lg -z-10"></div>
                        </button>
                        <div class="fixed mx-4 inset-0 h-screen bg-gray-900 z-50 bg-opacity-95" x-show="bandOpen" x-transition.duration.400ms.opacity>
                            <div class="flex justify-center items-center w-full h-full relative">
                                <div class=" bg-gray-900 rounded-3xl max-w-5xl relative" @click.away="bandOpen = false; anyArtistOpen = false">
                                    <div class="grid grid-cols-1 sm:grid-cols-2 p-8 overflow-hidden gap-6">
                                    <div class="overflow-hidden flex">
                                        <img src="https://preipop.nl/preipop_img/Sundown-escape.png" class="object-cover h-fit">
                                    </div>
                                    <div class="text-white">
                                        <h1 class="text-3xl font-bold">Sundown Escape</h1>
                                        <p>Wat begon als een collectief uit twee broers, is inmiddels een drietal dat de smaak te pakken heeft voor hun eerste optreden hier op PreiPop! Het ecstatische gitarenspel van Sundown Escape helpt je ontsnappen uit de dagelijkse realiteit. De band wordt door ingewijden omschreven als ‘Funk Rock, maar dan wel flink veel rock’</p>
                                    </div>
                                    </div>
                                    <div class="absolute -inset-2 bg-gradient-to-r from-green-900 to-purple-900 blur-xl rounded-lg -z-10"></div>
                                </div>
                                <button class="absolute top-6 right-6 text-white text-5xl" @click="bandOpen = false; anyArtistOpen = false">X</button>
                            </div>
                        </div>
                
                    </div>
                    <div class="col-span-12 sm:col-span-6   text-black relative rounded-lg" x-data="{ bandOpen: false }">
                        <button class="w-full  grid grid-cols-1 hover:cursor-pointer group rounded-lg relative" @click="bandOpen = !bandOpen; anyArtistOpen = !anyArtistOpen" x-transtion>
                            <div class=" overflow-hidden max-h-max">
                            <img src="https://preipop.nl/preipop_img/Wadaap.png" class=" object-cover w-full group-hover:scale-105 transition duration-300 rounded-lg opacity-75 max-h-fit">
                            </div>
                            <div class="bg-black flex justify-center group-hover:bg-gray-900 py-4 h-full flex-grow">
                                
                                <a class="text-white text-3xl font-extrabold p-2 flex justify-center items-center">WadAap</a>
                            </div>
                            <div class="absolute -inset-2 bg-gradient-to-r from-green-900 to-purple-900 blur-xl rounded-lg -z-10"></div>
                        </button>
                        <div class="fixed mx-4 inset-0 h-screen bg-gray-900 z-50 bg-opacity-95" x-show="bandOpen" x-transition.duration.400ms.opacity>
                            <div class="flex justify-center items-center w-full h-full relative">
                                <div class=" bg-gray-900 rounded-3xl max-w-5xl relative" @click.away="bandOpen = false; anyArtistOpen = false">
                                    <div class="grid grid-cols-1 sm:grid-cols-2 p-8 overflow-hidden gap-6">
                                    <div class="overflow-hidden flex">
                                        <img src="https://preipop.nl/preipop_img/Wadaap.png" class="object-cover h-fit">
                                    </div>
                                    <div class="text-white">
                                        <h1 class="text-3xl font-bold">WadAap</h1>
                                        <p>Welkom op de “Planeet van de Aap”… Zo heette het debuutalbum van dit hiphopduo, en daarmee namen ze ons in 2020 op een grote reis: Hoe vinden wij mensen, aapjes een weg door dit leven? Via muziek, connectie met elkaar en vooral goeie vibes maken. Dit is wat het duo WadAap voor ons komt doen, en ook jij mag er bij zijn!</p>
                                    </div>
                                    </div>
                                    <div class="absolute -inset-2 bg-gradient-to-r from-green-900 to-purple-900 blur-xl rounded-lg -z-10"></div>
                                </div>
                                <button class="absolute top-6 right-6 text-white text-5xl" @click="bandOpen = false; anyArtistOpen = false">X</button>
                            </div>
                        </div>
                
                    </div>
                    <div class="col-span-12 sm:col-span-6   text-black relative rounded-lg" x-data="{ bandOpen: false }">
                        <button class="w-full  grid grid-cols-1 hover:cursor-pointer group rounded-lg relative" @click="bandOpen = !bandOpen; anyArtistOpen = !anyArtistOpen" x-transtion>
                            <div class=" overflow-hidden max-h-max">
                            <img src="https://preipop.nl/preipop_img/dr-justice.png" class=" object-cover w-full group-hover:scale-105 transition duration-300 rounded-lg opacity-75 max-h-fit">
                            </div>
                            <div class="bg-black flex justify-center group-hover:bg-gray-900 py-4 h-full flex-grow">
                                
                                <a class="text-white text-3xl font-extrabold p-2 flex justify-center items-center">Dr. Justice and the Smooth Operators</a>
                            </div>
                            <div class="absolute -inset-2 bg-gradient-to-r from-green-900 to-purple-900 blur-xl rounded-lg -z-10"></div>
                        </button>
                        <div class="fixed mx-4 inset-0 h-screen bg-gray-900 z-50 bg-opacity-95" x-show="bandOpen" x-transition.duration.400ms.opacity>
                            <div class="flex justify-center items-center w-full h-full relative">
                                <div class=" bg-gray-900 rounded-3xl max-w-5xl relative" @click.away="bandOpen = false; anyArtistOpen = false">
                                    <div class="grid grid-cols-1 sm:grid-cols-2 p-8 overflow-hidden gap-6">
                                    <div class="overflow-hidden flex">
                                        <img src="https://preipop.nl/preipop_img/dr-justice.png" class="object-cover h-fit">
                                    </div>
                                    <div class="text-white">
                                        <h1 class="text-3xl font-bold">Dr. Justice and the Smooth Operators</h1>
                                        <p>Deze ‘Future Funk’ is een mix van Disco, Electronic, Pop, en Funk. Catchy dansbare songs, die je af en toe laten weg-glibberen of volledig omver blazen. Tight chops, drie geweldige achtergrondzangeressen, slappy bas, keytar en een ever-energetic performance.</p>
                                    </div>
                                    </div>
                                    <div class="absolute -inset-2 bg-gradient-to-r from-green-900 to-purple-900 blur-xl rounded-lg -z-10"></div>
                                </div>
                                <button class="absolute top-6 right-6 text-white text-5xl" @click="bandOpen = false; anyArtistOpen = false">X</button>
                            </div>
                        </div>
                
                    </div>
                    <div class="col-span-12 sm:col-span-6   text-black relative rounded-lg" x-data="{ bandOpen: false }">
                        <button class="w-full  grid grid-cols-1 hover:cursor-pointer group rounded-lg relative" @click="bandOpen = !bandOpen; anyArtistOpen = !anyArtistOpen" x-transtion>
                            <div class=" overflow-hidden max-h-max">
                            <img src="https://preipop.nl/preipop_img/Sundown-escape.png" class=" object-cover w-full group-hover:scale-105 transition duration-300 rounded-lg opacity-75 max-h-fit">
                            </div>
                            <div class="bg-black flex justify-center group-hover:bg-gray-900 py-4 h-full flex-grow">
                                
                                <a class="text-white text-3xl font-extrabold p-2 flex justify-center items-center">Sundown Escape</a>
                            </div>
                            <div class="absolute -inset-2 bg-gradient-to-r from-green-900 to-purple-900 blur-xl rounded-lg -z-10"></div>
                        </button>
                        <div class="fixed mx-4 inset-0 h-screen bg-gray-900 z-50 bg-opacity-95" x-show="bandOpen" x-transition.duration.400ms.opacity>
                            <div class="flex justify-center items-center w-full h-full relative">
                                <div class=" bg-gray-900 rounded-3xl max-w-5xl relative" @click.away="bandOpen = false; anyArtistOpen = false">
                                    <div class="grid grid-cols-1 sm:grid-cols-2 p-8 overflow-hidden gap-6">
                                    <div class="overflow-hidden flex">
                                        <img src="https://preipop.nl/preipop_img/Sundown-escape.png" class="object-cover h-fit">
                                    </div>
                                    <div class="text-white">
                                        <h1 class="text-3xl font-bold">Sundown Escape</h1>
                                        <p>Wat begon als een collectief uit twee broers, is inmiddels een drietal dat de smaak te pakken heeft voor hun eerste optreden hier op PreiPop! Het ecstatische gitarenspel van Sundown Escape helpt je ontsnappen uit de dagelijkse realiteit. De band wordt door ingewijden omschreven als ‘Funk Rock, maar dan wel flink veel rock’</p>
                                    </div>
                                    </div>
                                    <div class="absolute -inset-2 bg-gradient-to-r from-green-900 to-purple-900 blur-xl rounded-lg -z-10"></div>
                                </div>
                                <button class="absolute top-6 right-6 text-white text-5xl" @click="bandOpen = false; anyArtistOpen = false">X</button>
                            </div>
                        </div>
                
                    </div>
                    <div class="col-span-12 sm:col-span-6   text-black relative rounded-lg" x-data="{ bandOpen: false }">
                        <button class="w-full  grid grid-cols-1 hover:cursor-pointer group rounded-lg relative" @click="bandOpen = !bandOpen; anyArtistOpen = !anyArtistOpen" x-transtion>
                            <div class=" overflow-hidden max-h-max">
                            <img src="https://preipop.nl/preipop_img/Wadaap.png" class=" object-cover w-full group-hover:scale-105 transition duration-300 rounded-lg opacity-75 max-h-fit">
                            </div>
                            <div class="bg-black flex justify-center group-hover:bg-gray-900 py-4 h-full flex-grow">
                                
                                <a class="text-white text-3xl font-extrabold p-2 flex justify-center items-center">WadAap</a>
                            </div>
                            <div class="absolute -inset-2 bg-gradient-to-r from-green-900 to-purple-900 blur-xl rounded-lg -z-10"></div>
                        </button>
                        <div class="fixed mx-4 inset-0 h-screen bg-gray-900 z-50 bg-opacity-95" x-show="bandOpen" x-transition.duration.400ms.opacity>
                            <div class="flex justify-center items-center w-full h-full relative">
                                <div class=" bg-gray-900 rounded-3xl max-w-5xl relative" @click.away="bandOpen = false; anyArtistOpen = false">
                                    <div class="grid grid-cols-1 sm:grid-cols-2 p-8 overflow-hidden gap-6">
                                    <div class="overflow-hidden flex">
                                        <img src="https://preipop.nl/preipop_img/Wadaap.png" class="object-cover h-fit">
                                    </div>
                                    <div class="text-white">
                                        <h1 class="text-3xl font-bold">WadAap</h1>
                                        <p>Welkom op de “Planeet van de Aap”… Zo heette het debuutalbum van dit hiphopduo, en daarmee namen ze ons in 2020 op een grote reis: Hoe vinden wij mensen, aapjes een weg door dit leven? Via muziek, connectie met elkaar en vooral goeie vibes maken. Dit is wat het duo WadAap voor ons komt doen, en ook jij mag er bij zijn!</p>
                                    </div>
                                    </div>
                                    <div class="absolute -inset-2 bg-gradient-to-r from-green-900 to-purple-900 blur-xl rounded-lg -z-10"></div>
                                </div>
                                <button class="absolute top-6 right-6 text-white text-5xl" @click="bandOpen = false; anyArtistOpen = false">X</button>
                            </div>
                        </div>
                
                    </div>
                    
                </div>
            </section>

            <section class="max-w-4xl w-full mx-auto my-12 text-white">
                <h1 class="text-3xl mb-4 text-center">Hoofdsponsor</h1>
                <div class="grid grid-cols-12 mb-8 mx-6 md:mx-0">
                    <!-- Lead sponsor -->
                    <a href="https://www.goldbergescape.nl/" class="col-span-12 h-full w-full bg-gray-900 hover:bg-gray-800 grid md:grid-cols-2 relative py-8 px-4">
                        <div class="absolute -inset-2 bg-gradient-to-br from-green-900 to-purple-900 blur-sm -z-10"></div>   
                        <div class="flex justify-center">
                        <img src="https://preipop.nl/preipop_img/logo-goldberg.png" alt="" class="object-cover px-4 my-auto">
                        </div>
                        <div> 
                        <h1 class="text-3xl font-bold text-center md:text-left mt-2 md:mt-0">Goldberg Escape</h1>   
                        <p class="text-center md:text-left">Goldberg Escape is een escaperoom met 5 kamers, waarvan 4 verschillende! Goldberg bevindt zich op het Suikerunie-terein, het meest ‘up & coming’ gedeelte van Groningen.

                                Mede dankzij Golderg Escape kunnen we van Preipop 2022 weer een knallende editie maken!
                            </p>
                        </div>
                    </a>
                        
                    </div>
                    <!-- Other sponsors -->
                    <h1 class="text-3xl mb-4 text-center">Andere Sponsors</h1>
                    <div class="grid grid-cols-12 mx-4 md:mx-0">
                        <!-- Lead sponsor -->
                        <div class="col-span-12 h-full w-full bg-gray-900 relative py-4 px-4">
                            <div class="absolute -inset-2 bg-gradient-to-br from-green-900 to-purple-900 blur-sm -z-10"></div>   
                            <div class="grid grid-cols-12 text-white gap-4">
                                <a href="http://www.matersboekhouding.nl/" class="col-span-6 md:col-span-4 text-center group flex flex-col">
                                    <div class="flex items-center h-32 mb-2">
                                    <img src="https://preipop.nl/preipop_img/matersadmin.png" class="object-cover max-h-32 mx-auto">
                                    </div>
                                    <span class="font-bold text-lg group-hover:text-purple-300">Maters Administratie & Financieel Advies</span>
                                </a>
                                <a href="https://www.passionforpiercing.nl/" class="col-span-6 md:col-span-4 text-center group flex flex-col">
                                    <div class="flex items-center h-32 mb-2">
                                    <img src="https://preipop.nl/preipop_img/passion.jpg" class="object-cover max-h-32 mx-auto">
                                    </div>
                                    <span class="font-bold text-lg group-hover:text-purple-300">Passion for Piercing</span>
                                </a>
                                <a href="https://www.usva.nl/" class="col-span-6 md:col-span-4 text-center group flex flex-col">
                                    <div class="flex items-center h-32 mb-2">
                                    <img src="https://preipop.nl/preipop_img/usva.png" class="object-cover max-h-32 mx-auto">
                                    </div>
                                    <span class="font-bold text-lg group-hover:text-purple-300">Cultureel Studentencentrum USVA</span>
                                </a>
                                <a href="http://www.4roses.nl/" class="col-span-6 md:col-span-4 text-center group flex flex-col">
                                    <div class="flex items-center h-32 mb-2">
                                    <img src="https://preipop.nl/preipop_img/four-roses.png" class="object-cover max-h-32 mx-auto">
                                    </div>
                                    <span class="font-bold text-lg group-hover:text-purple-300">Four Rose’s</span>
                                </a>
                                <a href="http://hetpakhuisgroningen.nl/" class="col-span-6 md:col-span-4 text-center group flex flex-col">
                                    <div class="flex items-center h-32 mb-2">
                                    <img src="https://preipop.nl/preipop_img/logopakhuiszwartjpg.jpg" class="object-cover max-h-32 mx-auto">
                                    </div>
                                    <span class="font-bold text-lg group-hover:text-purple-300">Het Pakhuis</span>
                                </a>
                                <a href="https://www.facebook.com/RGB050/" class="col-span-6 md:col-span-4 text-center group flex flex-col">
                                    <div class="flex items-center h-32 mb-2">
                                    <img src="https://preipop.nl/preipop_img/rgb-bar.jpg" class="object-cover max-h-32 mx-auto">
                                    </div>
                                    <span class="font-bold text-lg group-hover:text-purple-300">RGB Bar</span>
                                </a>
                                <a href="https://www.facebook.com/stadjer/" class="col-span-6 md:col-span-4 text-center group flex flex-col">
                                    <div class="flex items-center h-32 mb-2">
                                    <img src="https://preipop.nl/preipop_img/stadjerlogo.png" class="object-cover max-h-32 mx-auto bg-white p-2">
                                    </div>
                                    <span class="font-bold text-lg group-hover:text-purple-300">Stadjer</span>
                                </a>
                                <a href="http://uglyduck.nl/" class="col-span-6 md:col-span-4 text-center group flex flex-col">
                                    <div class="flex items-center h-32 mb-2">
                                    <img src="https://preipop.nl/preipop_img/Ugly-duc.png" class="object-cover max-h-32 mx-auto">
                                    </div>
                                    <span class="font-bold text-lg group-hover:text-purple-300">Ugly Duck</span>
                                </a>
                                <a href="https://detevredenrookster.nl" class="col-span-6 md:col-span-4 text-center group flex flex-col">
                                    <div class="flex items-center h-32 mb-2">
                                    <img src="https://preipop.nl/preipop_img/tevreden-rookster-groningen-logo.png" class="object-cover max-h-32 mx-auto bg-white">
                                    </div>
                                    <span class="font-bold text-lg group-hover:text-purple-300">De Tevreden Rookster</span>
                                </a>
                            </div>
                        </div>
                </div>
                <div class="flex justify-center mt-4">
                    <button
                    class="py-2 px-5 bg-black text-white rounded-lg border border-green-300 hover:bg-purple-900 text-2xl font-bold mt-4 z-20 w-fit">
                    <a href="">Wordt ook sponsor</a>
                </button>
                </div>
            </section>

            

        </div>

        </div>

<?php
get_footer();
?>
