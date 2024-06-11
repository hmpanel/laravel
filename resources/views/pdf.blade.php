<!DOCTYPE html>
<html>
<head>
    <title>{{ $domain }}</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
	<center>
		<h4>{{ strtoupper(__('hmpanel.site')) }}</h4>
		<h1>{{ $domain }}</h1>
    </center>
	<br>
    <h3>SSH/SFTP</h3>
	<ul>
		<li><b>{{ __('hmpanel.host') }}</b> {{$ip}}</li>
		<li><b>{{ __('hmpanel.port') }}</b> 22</li>
		<li><b>{{ __('hmpanel.username') }}</b> {{$username}}</li>
        <li><b>{{ __('hmpanel.password') }}</b> {{$password}}</li>
        <li><b>{{ __('hmpanel.path') }}</b> /home/{{ $username }}/web/{{ $path }}</li>
	</ul>
	<br>
	<hr>
	<br>
	<h3>{{ __('hmpanel.database') }}</h3>
	<ul>
		<li><b>{{ __('hmpanel.host') }}</b> 127.0.0.1</li>
		<li><b>{{ __('hmpanel.port') }}</b> 3306</li>
		<li><b>{{ __('hmpanel.username') }}</b> {{$username}}</li>
		<li><b>{{ __('hmpanel.password') }}</b> {{$dbpass}}</li>
		<li><b>{{ __('hmpanel.name') }}</b> {{$username}}</li>
    </ul>
    <br>
	<hr>
    <br>
    <center>
        <p>{!! __('hmpanel.pdf_site_php_version', ['domain' => $domain, 'php' => $php]) !!}</p>
    </center>
    <br>
	<center>
		<p>{{ __('hmpanel.pdf_take_care') }}</p>
	</center>
    <br>
    <br>
	<br>
	<center>
		<h5>{{ config('hmpanel.name') }}<br>({{ config('hmpanel.website') }})</h5>
	</center>
</body>
</html>
