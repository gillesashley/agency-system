@extends('layouts.frontend')

@section('content')
    <div class="py-4 mx-40">
        <h1 class="text-4xl font-bold my-8">Small enough to care, big enough to trust.</h1>
        <p class="text-lg">
            A specialized staffing company called Twenty Four Seven Nursing supplies
            the UK healthcare industry with highly skilled temporary workers with years
            of expertise. Our nurses and medical staff are available for appointments on an
            as-needed or regular basis, seven days a week.
        </p>
        <p class="text-lg my-6">
            Additionally, we offer permanent recruitment options to organizations needing
            to hire nursing specialists in a variety of contexts. All three national framework
            contracts for the NHS have accepted us as a supplier.
        </p>
        <p class="text-lg">
            Get in touch if you’d like to register with us for work opportunities or if you’re
            looking to hire qualified nurses and healthcare assistants.
        </p>
        <div class="flex justify-center gap-10 mt-10">
            <div class="bg-blue-400 px-60 py-10 flex flex-col items-center justify-center rounded-2xl">
                <img src="https://www.247nursinguk.com/wp-content/uploads/2022/04/nursing-staff.png" alt="" />
                <p class="text-white text-2xl font-bold">Candidates</p>
                <a href="#" type="button"
                    class="text-black bg-white focus:outline-none focus:ring-4 font-medium rounded-full text-sm px-6 py-2.5 text-center mr-2 mb-2 mt-7">APPLY
                    HERE</a>
            </div>
            <div class="bg-blue-400 px-60 py-10 flex flex-col items-center justify-center rounded-2xl">
                <img decoding="async" width="400" height="400" src="https://www.247nursinguk.com/wp-content/uploads/2022/04/hospital-reception.png" alt="">
                <p class="text-white text-2xl font-bold">Clients</p>
                <a href="{{ route('services.index') }}" type="button"
                    class="text-black bg-white focus:outline-none focus:ring-4 font-medium rounded-full text-sm px-6 py-2.5 text-center mr-2 mb-2 mt-7">VIEW
                    SERVICES</a>
            </div>
        </div>
    </div>
@endsection
