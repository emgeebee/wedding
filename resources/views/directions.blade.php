@extends('master')

@section('title', 'Menu')

@section('sidebar')
    @parent
@endsection

@section('content')
    <p>
        <span class="field">Address</span>
        <span class="value address">Houchin's Ln</span>
        <span class="value address">Essex</span>
        <span class="value address">CO6 1RT</span>
        <span class="field">Train</span>
        <span class="value address">Trains from London Liverpool St. to Kelvedon take about an hour and can be seen <a href="http://ojp.nationalrail.co.uk/service/ldbboard/dep/LST/KEL/To" title="See train times">here</a>, it's a &#163;10 taxi from there.</span>
        <span class="field">Map</span>
        <span class="value map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d581610.5880147278!2d-0.07672601905543984!3d51.63947871156157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8fce189cc778b%3A0x565021de4f9ca940!2sHouchin&#39;s+Ln%2C+Colchester%2C+Essex+CO6%2C+UK!5e0!3m2!1sen!2suk!4v1453586879910" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></span>
        <span class="value map map-large"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d581610.5880147278!2d-0.07672601905543984!3d51.63947871156157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8fce189cc778b%3A0x565021de4f9ca940!2sHouchin&#39;s+Ln%2C+Colchester%2C+Essex+CO6%2C+UK!5e0!3m2!1sen!2suk!4v1453586879910" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe></span>
    </p>
@endsection
