<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Tailwind Website</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white">

    <!-- Header -->
    @include('components.header')

    <!-- Contenido principal -->
    <div class="container mx-auto mt-8">
    <div class="mx-12">
        <!-- Card -->
        <div class="bg-gray-200 rounded-lg shadow-md overflow-hidden">
            <!-- Contenido -->
            <div class="p-4 md:flex md:justify-center">
                <div class="md:w-1/2 lg:w-1/3 flex flex-col justify-center mx-auto">
                    <!-- Imagen -->
                    <div class="mt-6 flex justify-center items-center">
                        <img src="{{ asset('img/avatar.jpg') }}" alt="Imagen de perfil" class="w-28 h-28 md:w-32 md:h-32 rounded-md ">
                    </div>
                    <!-- Nombre -->
                    <h2 class="text-3xl font-semibold text-center mt-4">Cristian Cutar</h2>
                    <!-- Texto -->
                    <p class="text-gray-700 mb-4 text-center">Someone in the world</p>
                    <!-- Texto -->
                    <p class="text-gray-700 font-bold mb-4 text-center">You can find out more about me in these links</p>
                    <!-- Links -->
                    <div class="md:flex md:justify-center">
                        <a href="https://twitter.com/" class="block md:inline-block text-sm md:text-base bg-blue-700 text-white font-bold py-2 px-4 rounded text-center mb-6 ml-6 mr-6">Twitter</a>
                        <a href="https://es.linkedin.com/?src=go-pa&trk=sem-ga_campid.18146679037_asid.140850334975_crid.694860685343_kw.linkedin_d.c_tid.kwd-148086543_n.g_mt.e_geo.20294&mcid=6968657504633266178&cid=&gad_source=1&gclid=CjwKCAjwuJ2xBhA3EiwAMVjkVPl6Xy2FE6by7KS3MIUZCva2rMEpjCr8aWl5Q_qOUlFSyvYaL_uxIhoC5PcQAvD_BwE&gclsrc=aw.ds" class="block md:inline-block text-sm md:text-base bg-blue-700 text-white font-bold py-2 px-4 rounded mt-2 md:mt-0 md:ml-2 text-center mb-6 ml-6 mr-6">LinkedIn</a>
                        <a href="https://www.instagram.com/" class="block md:inline-block text-sm md:text-base bg-blue-700 text-white font-bold py-2 px-4 rounded mt-2 md:mt-0 md:ml-2 text-center mb-8 ml-6 mr-6">Instagram</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






    <!-- Footer -->
    @include('components.footer')

</body>
</html>
