<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body data-spy="scroll" data-target="#navSection" data-offset="100">
@if($layout == 'index')

            <section class="col">
                @include("Drivers.driverslist")
            </section >
            <section class="col">


        @elseif ($layout == 'create')
            <section class="col">
                @include("Drivers\create")
            </section >
            <section class="col">

            </section>

            @elseif ($layout == 'edit')
            <section class="col">
                @include("Drivers\edit")
            </section >
            <section class="col">

            </section>

        @elseif ($layout == 'show')
        <div class="container-fluid">

            <section class="col">
                @include("/")
            </section >
            <section class="col">

            </section>
        </div>

@endif


