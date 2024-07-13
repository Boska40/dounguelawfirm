@extends('layouts.master')

@section('content')

@session('success')
    
@endsession

{{-- <div class="totop"><img src="./images/tools-icons/arrow-up.svg" alt=""></div> --}}
<a class="whatsapp" href="https://wa.me/+237657593897" target="_blank"><img src="./images/tools-icons/whatsapp-logo.png"
        alt=""></a>


<div class="carreers">
    <h2>EMPLOI ET STAGES</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis incidunt est explicabo quod repellat ut
        fuga eos sit velit maiores.</p>
    <form action="candidates" method="post" enctype="multipart/form-data">
        @csrf
        <h3>Formulaire de candidature</h3>
        <input type="text" name="noms" placeholder="Noms et Prénoms" value="{{ old('noms') }}" class=" @error('noms') invalid @enderror " >
        <input type="email" name="e_mail" placeholder="E-mail" value="{{ old('e_mail') }}" class=" @error('e_mail') invalid @enderror " >
        <input type="tel" name="telephone" placeholder="Téléphone" value="{{ old('telephone') }}" class=" @error('telephone') invalid @enderror " >
        <select name="niveau" class=" @error('niveau') invalid @enderror " >
            <option value="">-- Niveau d'études --</option>
            <option @if(old('niveau') == 'Licence 1') selected @endif value="Licence 1">Licence 1</option>
            <option @if(old('niveau') == 'Licence 2') selected @endif value="Licence 2">Licence 2</option>
            <option @if(old('niveau') == 'Licence 3') selected @endif value="Licence 3">Licence 3</option>
            <option @if(old('niveau') == 'Master 1') selected @endif value="Master 1">Master 1</option>
            <option @if(old('niveau') == 'Master 2') selected @endif value="Master 2">Master 2</option>
            <option @if(old('niveau') == 'Doctorat') selected @endif value="Doctorat">Doctorat</option>
        </select>
        <input type="text" name="adresse" placeholder="Adresse" value="{{ old('adresse') }}" class=" @error('adresse') invalid @enderror " >
        <h4>Votre CV :</h4>
        <input type="file" name="cv" class=" @error('cv') invalid @enderror " >
        <p style="margin-top: -1rem; font-size: 12px;">Type de fichiers : pdf, png, jpg, jpeg, doc, docx</p>
        <input type="submit" value="ENVOYER" style="text-align: center;" name="send">
    </form>
</div>

@endsection
