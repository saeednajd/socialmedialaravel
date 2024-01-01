<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 style="text-align: right;">: پست های شما</h1>
                    <style>
                        .deletebtn{
                            border: 1px solid red;
                            padding: 5px;   
                            cursor: pointer;
                        }
                        .deletebtn:hover{
                            background-color: red;
                        }
                        .editbtn{
                            border: 1px solid green;
                            padding: 5px;   
                            cursor: pointer;
                        }
                        .editbtn:hover{
                            background-color: green;
                        }
                    </style>
                    <?php
                        // dd($thisuserpost);
                        $temp=0;
                        foreach($thisuserpost as $singlepost){

                        
                    ?>

                    <div class="post" style="width: 90vw;border: 5px solid black;  margin: 5vh auto;min-height: 25vh;">

                        <h1 style="text-align: center; border-bottom: 1px solid black; padding: 2vh;">
                        <?php echo $thisuserpost[$temp]->title; ?> </h1>
                        <p style="text-align: center; margin-top: 5vh;"><?php echo $thisuserpost[$temp]->content; ?> </p>
                        
                        <form action="/" method="post">
                            <input class="deletebtn" type="button" value="حذف" >
                            <input class="editbtn" type="button" value="ادیت">

                        </form>
                

                    </div>  
                    <?php
                        $temp++;    
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
