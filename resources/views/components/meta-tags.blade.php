<title>{{ !empty($title) ? $title : 'Plymouth Property Maintenance Services' }}</title>
<meta name="description" content="{{ !empty($description) ? $description : 'Default description goes here' }}">
<meta property="og:title" content="{{ !empty($ogTitle) ? $ogTitle : 'Default OG Title' }}">
<meta property="og:description" content="{{ !empty($ogDescription) ? $ogDescription : 'Default OG Description' }}">
<meta property="og:url" content="{{ !empty($ogUrl) ? $ogUrl : url()->current() }}">
<link rel="canonical" href="{{ !empty($canonical) ? $canonical : url()->current() }}">
