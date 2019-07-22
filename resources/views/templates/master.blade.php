@section('header')
    @include('segments.header')
@endsection

@section('footer')
    @include('segments.footer')
@endsection

@section('title', 'Reeduca Recicla')
@section('description', 'A Reeduca, por sua atitude empresarial e pela qualidade das relações que busca desenvolver com os diversos agentes que articula, expressa sua marca na identidade com pessoas e empresas que se comprometem a atuar de maneira efetiva na colaboração por um mundo mais saudável para se habitar, em respeito ao meio ambiente do qual fazem parte e responsabilidade para com as gerações por vir.')
@section('keywords', 'recicla,palavras,chave,separadas,por,virgula')

<!DOCTYPE html>
<html lang="pt">
    <head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=yes">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<meta name="theme-color" content="#000000">
		<link rel="icon" href="img/favicon.png" sizes="16x16 32x32" type="image/jpg">

		<!-- Metas para o Google -->
		<title>@yield('title')</title>
		<meta name="description" content="@yield('description')">
		<meta name="keywords" content="@yield('keywords')">

		<!-- Metas para o Facebook -->
		<meta property="og:type" content="website" />
		<meta property="og:title" content="@yield('title')" />
		<meta property="og:url" content=""/>
		<meta property="og:site_name" content="" />
		<meta property="og:description" content="@yield('description')"/>
		<meta property="og:image" content="http://localhost/projetoreeducarecicla/img/salveo%20planeta.png" />
		<meta property="fb:app_id" content="501123709922257" />

		<title>@yield('title')</title>
	</head>
<body>
@yield('header')

@yield('content')

@yield('footer')
</body>
</html> 