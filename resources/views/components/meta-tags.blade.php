<title>{{ $title ?? 'titles' }}</title>
<meta name="description" content="{{ $description ?? 'Default description goes here' }}">
<meta property="og:title" content="{{ $ogTitle ?? 'Default OG Title' }}">
<meta property="og:description" content="{{ $ogDescription ?? 'Default OG Description' }}">
<meta property="og:url" content="{{ $ogUrl ?? url()->current() }}">
<link rel="canonical" href="{{ $canonical ?? url()->current() }}">
