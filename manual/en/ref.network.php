<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Network Functions - Manual</title>

      <link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">
  
 <link rel="icon" type="image/svg+xml" sizes="any" href="https://www.php.net/favicon.svg?v=2">
 <link rel="icon" type="image/png" sizes="196x196" href="https://www.php.net/favicon-196x196.png?v=2">
 <link rel="icon" type="image/png" sizes="32x32" href="https://www.php.net/favicon-32x32.png?v=2">
 <link rel="icon" type="image/png" sizes="16x16" href="https://www.php.net/favicon-16x16.png?v=2">
 <link rel="shortcut icon" href="https://www.php.net/favicon.ico?v=2">

 <link rel="search" type="application/opensearchdescription+xml" href="https://www.php.net/phpnetimprovedsearch.src" title="Add PHP.net search">
 <link rel="alternate" type="application/atom+xml" href="https://www.php.net/releases/feed.php" title="PHP Release feed">
 <link rel="alternate" type="application/atom+xml" href="https://www.php.net/feed.atom" title="PHP: Hypertext Preprocessor">

 <link rel="canonical" href="https://www.php.net/manual/en/ref.network.php">
 <link rel="shorturl" href="https://www.php.net/network">
 <link rel="alternate" href="https://www.php.net/network" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.network.php">
 <link rel="prev" href="https://www.php.net/manual/en/network.constants.php">
 <link rel="next" href="https://www.php.net/manual/en/function.checkdnsrr.php">

 <link rel="alternate" href="https://www.php.net/manual/en/ref.network.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/ref.network.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/ref.network.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/ref.network.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/ref.network.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/ref.network.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/ref.network.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/ref.network.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/ref.network.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/ref.network.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/ref.network.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Network Functions" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Network Functions - Manual" />
<meta name="twitter:description" content="Network Functions" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Network Functions - Manual" />
<meta itemprop="description" content="Network Functions" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Network Functions" />

<link href="https://fosstodon.org/@php" rel="me" />
<!-- Matomo -->
<script>
    var _paq = window._paq = window._paq || [];
    /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
    _paq.push(["setDoNotTrack", true]);
    _paq.push(["disableCookies"]);
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
        var u="https://analytics.php.net/";
        _paq.push(['setTrackerUrl', u+'matomo.php']);
        _paq.push(['setSiteId', '1']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
    })();
</script>
<!-- End Matomo Code -->
</head>
<body class="docs ">

<nav class="navbar navbar-fixed-top">
  <div class="navbar__inner">
    <a href="/" aria-label="PHP Home" class="navbar__brand">
      <img
        src="/images/logos/php-logo-white.svg"
        aria-hidden="true"
        width="80"
        height="40"
      >
    </a>

    <div
      id="navbar__offcanvas"
      tabindex="-1"
      class="navbar__offcanvas"
      aria-label="Menu"
    >
      <button
        id="navbar__close-button"
        class="navbar__icon-item navbar_icon-item--visually-aligned navbar__close-button"
      >
        <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" fill="currentColor"><path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" /></svg>
      </button>

      <ul class="navbar__nav">
                            <li class="navbar__item">
              <a
                href="/downloads.php"
                                class="navbar__link  "
              >
                                  Downloads                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/docs.php"
                aria-current="page"                class="navbar__link navbar__link--active "
              >
                                  Documentation                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/get-involved.php"
                                class="navbar__link  "
              >
                                  Get Involved                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/support.php"
                                class="navbar__link  "
              >
                                  Help                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/releases/8.4/index.php"
                                class="navbar__link  navbar__release"
              >
                                  <img src="/images/php8/logo_php8_4.svg" alt="PHP 8.4">
                              </a>
          </li>
              </ul>
    </div>

    <div class="navbar__right">
      
      <!-- Desktop default search -->
      <form
        action="/manual-lookup.php"
        class="navbar__search-form"
      >
        <label for="navbar__search-input" aria-label="Search docs">
          <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>        </label>
        <input
          type="search"
          name="pattern"
          id="navbar__search-input"
          class="navbar__search-input"
          placeholder="Search docs"
          accesskey="s"
        >
        <input type="hidden" name="scope" value="quickref">
      </form>

      <!-- Desktop encanced search -->
      <button
        id="navbar__search-button"
        class="navbar__search-button"
        hidden
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>        Search docs
      </button>

      <!-- Mobile default items -->
      <a
        id="navbar__search-link"
        href="/lookup-form.php"
        aria-label="Search docs"
        class="navbar__icon-item navbar__search-link"
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>      </a>
      <a
        id="navbar__menu-link"
        href="/menu.php"
        aria-label="Menu"
        class="navbar__icon-item navbar_icon-item--visually-aligned navbar_menu-link"
      >
        <svg xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="currentColor"
>
  <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
</svg>      </a>

      <!-- Mobile enhanced items -->
      <button
        id="navbar__search-button-mobile"
        aria-label="Search docs"
        class="navbar__icon-item navbar__search-button-mobile"
        hidden
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>      </button>
      <button
        id="navbar__menu-button"
        aria-label="Menu"
        class="navbar__icon-item navbar_icon-item--visually-aligned"
        hidden
      >
        <svg xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="currentColor"
>
  <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
</svg>      </button>
    </div>

    <div
      id="navbar__backdrop"
      class="navbar__backdrop"
    ></div>
  </div>

  <div id="flash-message"></div>
</nav>
<div class="headsup"><a href='/index.php#2025-09-25-3'>PHP 8.5.0 RC 1 available for testing</a></div>
<nav id="trick"><div><dl>
<dt><a href='/manual/en/getting-started.php'>Getting Started</a></dt>
	<dd><a href='/manual/en/introduction.php'>Introduction</a></dd>
	<dd><a href='/manual/en/tutorial.php'>A simple tutorial</a></dd>
<dt><a href='/manual/en/langref.php'>Language Reference</a></dt>
	<dd><a href='/manual/en/language.basic-syntax.php'>Basic syntax</a></dd>
	<dd><a href='/manual/en/language.types.php'>Types</a></dd>
	<dd><a href='/manual/en/language.variables.php'>Variables</a></dd>
	<dd><a href='/manual/en/language.constants.php'>Constants</a></dd>
	<dd><a href='/manual/en/language.expressions.php'>Expressions</a></dd>
	<dd><a href='/manual/en/language.operators.php'>Operators</a></dd>
	<dd><a href='/manual/en/language.control-structures.php'>Control Structures</a></dd>
	<dd><a href='/manual/en/language.functions.php'>Functions</a></dd>
	<dd><a href='/manual/en/language.oop5.php'>Classes and Objects</a></dd>
	<dd><a href='/manual/en/language.namespaces.php'>Namespaces</a></dd>
	<dd><a href='/manual/en/language.enumerations.php'>Enumerations</a></dd>
	<dd><a href='/manual/en/language.errors.php'>Errors</a></dd>
	<dd><a href='/manual/en/language.exceptions.php'>Exceptions</a></dd>
	<dd><a href='/manual/en/language.fibers.php'>Fibers</a></dd>
	<dd><a href='/manual/en/language.generators.php'>Generators</a></dd>
	<dd><a href='/manual/en/language.attributes.php'>Attributes</a></dd>
	<dd><a href='/manual/en/language.references.php'>References Explained</a></dd>
	<dd><a href='/manual/en/reserved.variables.php'>Predefined Variables</a></dd>
	<dd><a href='/manual/en/reserved.exceptions.php'>Predefined Exceptions</a></dd>
	<dd><a href='/manual/en/reserved.interfaces.php'>Predefined Interfaces and Classes</a></dd>
	<dd><a href='/manual/en/reserved.attributes.php'>Predefined Attributes</a></dd>
	<dd><a href='/manual/en/context.php'>Context options and parameters</a></dd>
	<dd><a href='/manual/en/wrappers.php'>Supported Protocols and Wrappers</a></dd>
</dl>
<dl>
<dt><a href='/manual/en/security.php'>Security</a></dt>
	<dd><a href='/manual/en/security.intro.php'>Introduction</a></dd>
	<dd><a href='/manual/en/security.general.php'>General considerations</a></dd>
	<dd><a href='/manual/en/security.cgi-bin.php'>Installed as CGI binary</a></dd>
	<dd><a href='/manual/en/security.apache.php'>Installed as an Apache module</a></dd>
	<dd><a href='/manual/en/security.sessions.php'>Session Security</a></dd>
	<dd><a href='/manual/en/security.filesystem.php'>Filesystem Security</a></dd>
	<dd><a href='/manual/en/security.database.php'>Database Security</a></dd>
	<dd><a href='/manual/en/security.errors.php'>Error Reporting</a></dd>
	<dd><a href='/manual/en/security.variables.php'>User Submitted Data</a></dd>
	<dd><a href='/manual/en/security.hiding.php'>Hiding PHP</a></dd>
	<dd><a href='/manual/en/security.current.php'>Keeping Current</a></dd>
<dt><a href='/manual/en/features.php'>Features</a></dt>
	<dd><a href='/manual/en/features.http-auth.php'>HTTP authentication with PHP</a></dd>
	<dd><a href='/manual/en/features.cookies.php'>Cookies</a></dd>
	<dd><a href='/manual/en/features.sessions.php'>Sessions</a></dd>
	<dd><a href='/manual/en/features.file-upload.php'>Handling file uploads</a></dd>
	<dd><a href='/manual/en/features.remote-files.php'>Using remote files</a></dd>
	<dd><a href='/manual/en/features.connection-handling.php'>Connection handling</a></dd>
	<dd><a href='/manual/en/features.persistent-connections.php'>Persistent Database Connections</a></dd>
	<dd><a href='/manual/en/features.commandline.php'>Command line usage</a></dd>
	<dd><a href='/manual/en/features.gc.php'>Garbage Collection</a></dd>
	<dd><a href='/manual/en/features.dtrace.php'>DTrace Dynamic Tracing</a></dd>
</dl>
<dl>
<dt><a href='/manual/en/funcref.php'>Function Reference</a></dt>
	<dd><a href='/manual/en/refs.basic.php.php'>Affecting PHP's Behaviour</a></dd>
	<dd><a href='/manual/en/refs.utilspec.audio.php'>Audio Formats Manipulation</a></dd>
	<dd><a href='/manual/en/refs.remote.auth.php'>Authentication Services</a></dd>
	<dd><a href='/manual/en/refs.utilspec.cmdline.php'>Command Line Specific Extensions</a></dd>
	<dd><a href='/manual/en/refs.compression.php'>Compression and Archive Extensions</a></dd>
	<dd><a href='/manual/en/refs.crypto.php'>Cryptography Extensions</a></dd>
	<dd><a href='/manual/en/refs.database.php'>Database Extensions</a></dd>
	<dd><a href='/manual/en/refs.calendar.php'>Date and Time Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.fileprocess.file.php'>File System Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.international.php'>Human Language and Character Encoding Support</a></dd>
	<dd><a href='/manual/en/refs.utilspec.image.php'>Image Processing and Generation</a></dd>
	<dd><a href='/manual/en/refs.remote.mail.php'>Mail Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.math.php'>Mathematical Extensions</a></dd>
	<dd><a href='/manual/en/refs.utilspec.nontext.php'>Non-Text MIME Output</a></dd>
	<dd><a href='/manual/en/refs.fileprocess.process.php'>Process Control Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.other.php'>Other Basic Extensions</a></dd>
	<dd><a href='/manual/en/refs.remote.other.php'>Other Services</a></dd>
	<dd><a href='/manual/en/refs.search.php'>Search Engine Extensions</a></dd>
	<dd><a href='/manual/en/refs.utilspec.server.php'>Server Specific Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.session.php'>Session Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.text.php'>Text Processing</a></dd>
	<dd><a href='/manual/en/refs.basic.vartype.php'>Variable and Type Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.webservice.php'>Web Services</a></dd>
	<dd><a href='/manual/en/refs.utilspec.windows.php'>Windows Only Extensions</a></dd>
	<dd><a href='/manual/en/refs.xml.php'>XML Manipulation</a></dd>
	<dd><a href='/manual/en/refs.ui.php'>GUI Extensions</a></dd>
</dl>
<dl>
<dt>Keyboard Shortcuts</dt><dt>?</dt>
<dd>This help</dd>
<dt>j</dt>
<dd>Next menu item</dd>
<dt>k</dt>
<dd>Previous menu item</dd>
<dt>g p</dt>
<dd>Previous man page</dd>
<dt>g n</dt>
<dd>Next man page</dd>
<dt>G</dt>
<dd>Scroll to bottom</dd>
<dt>g g</dt>
<dd>Scroll to top</dd>
<dt>g h</dt>
<dd>Goto homepage</dd>
<dt>g s</dt>
<dd>Goto search<br>(current page)</dd>
<dt>/</dt>
<dd>Focus search box</dd>
</dl></div></nav>
<div id="goto">
    <div class="search">
         <div class="text"></div>
         <div class="results"><ul></ul></div>
   </div>
</div>

  <div id="breadcrumbs" class="clearfix">
    <div id="breadcrumbs-inner">
          <div class="next">
        <a href="function.checkdnsrr.php">
          checkdnsrr &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="network.constants.php">
          &laquo; Predefined Constants        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.network.php'>Network</a></li>      </ul>
    </div>
  </div>




<div id="layout" class="clearfix">
  <section id="layout-content">
  <div class="page-tools">
    <div class="change-language">
      <form action="/manual/change.php" method="get" id="changelang" name="changelang">
        <fieldset>
          <label for="changelang-langs">Change language:</label>
          <select onchange="document.changelang.submit()" name="page" id="changelang-langs">
            <option value='en/ref.network.php' selected="selected">English</option>
            <option value='de/ref.network.php'>German</option>
            <option value='es/ref.network.php'>Spanish</option>
            <option value='fr/ref.network.php'>French</option>
            <option value='it/ref.network.php'>Italian</option>
            <option value='ja/ref.network.php'>Japanese</option>
            <option value='pt_BR/ref.network.php'>Brazilian Portuguese</option>
            <option value='ru/ref.network.php'>Russian</option>
            <option value='tr/ref.network.php'>Turkish</option>
            <option value='uk/ref.network.php'>Ukrainian</option>
            <option value='zh/ref.network.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="ref.network" class="reference">
 <h1 class="title">Network Functions</h1>

 




































































































































































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="function.checkdnsrr.php">checkdnsrr</a> — Check DNS records corresponding to a given Internet host name or IP address</li><li><a href="function.closelog.php">closelog</a> — Close connection to system logger</li><li><a href="function.dns-check-record.php">dns_check_record</a> — Alias of checkdnsrr</li><li><a href="function.dns-get-mx.php">dns_get_mx</a> — Alias of getmxrr</li><li><a href="function.dns-get-record.php">dns_get_record</a> — Fetch DNS Resource Records associated with a hostname</li><li><a href="function.fsockopen.php">fsockopen</a> — Open Internet or Unix domain socket connection</li><li><a href="function.gethostbyaddr.php">gethostbyaddr</a> — Get the Internet host name corresponding to a given IP address</li><li><a href="function.gethostbyname.php">gethostbyname</a> — Get the IPv4 address corresponding to a given Internet host name</li><li><a href="function.gethostbynamel.php">gethostbynamel</a> — Get a list of IPv4 addresses corresponding to a given Internet host
   name</li><li><a href="function.gethostname.php">gethostname</a> — Gets the host name</li><li><a href="function.getmxrr.php">getmxrr</a> — Get MX records corresponding to a given Internet host name</li><li><a href="function.getprotobyname.php">getprotobyname</a> — Get protocol number associated with protocol name</li><li><a href="function.getprotobynumber.php">getprotobynumber</a> — Get protocol name associated with protocol number</li><li><a href="function.getservbyname.php">getservbyname</a> — Get port number associated with an Internet service and protocol</li><li><a href="function.getservbyport.php">getservbyport</a> — Get Internet service which corresponds to port and protocol</li><li><a href="function.header.php">header</a> — Send a raw HTTP header</li><li><a href="function.header-register-callback.php">header_register_callback</a> — Call a header function</li><li><a href="function.header-remove.php">header_remove</a> — Remove previously set headers</li><li><a href="function.headers-list.php">headers_list</a> — Returns a list of response headers sent (or ready to send)</li><li><a href="function.headers-sent.php">headers_sent</a> — Checks if or where headers have been sent</li><li><a href="function.http-clear-last-response-headers.php">http_clear_last_response_headers</a> — Clears the stored HTTP response headers</li><li><a href="function.http-get-last-response-headers.php">http_get_last_response_headers</a> — Retrieve last HTTP response headers</li><li><a href="function.http-response-code.php">http_response_code</a> — Get or Set the HTTP response code</li><li><a href="function.inet-ntop.php">inet_ntop</a> — Converts a packed internet address to a human readable representation</li><li><a href="function.inet-pton.php">inet_pton</a> — Converts a human readable IP address to its packed in_addr representation</li><li><a href="function.ip2long.php">ip2long</a> — Converts a string containing an (IPv4) Internet Protocol dotted address into a long integer</li><li><a href="function.long2ip.php">long2ip</a> — Converts a long integer address into a string in (IPv4) Internet standard dotted format</li><li><a href="function.net-get-interfaces.php">net_get_interfaces</a> — Get network interfaces</li><li><a href="function.openlog.php">openlog</a> — Open connection to system logger</li><li><a href="function.pfsockopen.php">pfsockopen</a> — Open persistent Internet or Unix domain socket connection</li><li><a href="function.request-parse-body.php">request_parse_body</a> — Read and parse the request body and return the result</li><li><a href="function.setcookie.php">setcookie</a> — Send a cookie</li><li><a href="function.setrawcookie.php">setrawcookie</a> — Send a cookie without urlencoding the cookie value</li><li><a href="function.socket-get-status.php">socket_get_status</a> — Alias of stream_get_meta_data</li><li><a href="function.socket-set-blocking.php">socket_set_blocking</a> — Alias of stream_set_blocking</li><li><a href="function.socket-set-timeout.php">socket_set_timeout</a> — Alias of stream_set_timeout</li><li><a href="function.syslog.php">syslog</a> — Generate a system log message</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/network/reference.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fref.network%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=ref.network&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.network.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="74656">  <div class="votes">
    <div id="Vu74656">
    <a href="/manual/vote-note.php?id=74656&amp;page=ref.network&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74656">
    <a href="/manual/vote-note.php?id=74656&amp;page=ref.network&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74656" title="61% like this...">
    37
    </div>
  </div>
  <a href="#74656" class="name">
  <strong class="user"><em>claudiu at cnixs dot com</em></strong></a><a class="genanchor" href="#74656"> &para;</a><div class="date" title="2007-04-22 02:52"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74656">
<div class="phpcode"><code><span class="html">A simple and very fast function to check against CIDR.<br /><br />Your previous examples are too complicated and involves a lot of functions call.<br /><br />Here it is (only with arithmetic operators and call only to ip2long () and split() ):<br /><span class="default">&lt;?php<br />  </span><span class="keyword">function </span><span class="default">ipCIDRCheck </span><span class="keyword">(</span><span class="default">$IP</span><span class="keyword">, </span><span class="default">$CIDR</span><span class="keyword">) {<br />    list (</span><span class="default">$net</span><span class="keyword">, </span><span class="default">$mask</span><span class="keyword">) = </span><span class="default">split </span><span class="keyword">(</span><span class="string">"/"</span><span class="keyword">, </span><span class="default">$CIDR</span><span class="keyword">);<br />    <br />    </span><span class="default">$ip_net </span><span class="keyword">= </span><span class="default">ip2long </span><span class="keyword">(</span><span class="default">$net</span><span class="keyword">);<br />    </span><span class="default">$ip_mask </span><span class="keyword">= ~((</span><span class="default">1 </span><span class="keyword">&lt;&lt; (</span><span class="default">32 </span><span class="keyword">- </span><span class="default">$mask</span><span class="keyword">)) - </span><span class="default">1</span><span class="keyword">);<br /><br />    </span><span class="default">$ip_ip </span><span class="keyword">= </span><span class="default">ip2long </span><span class="keyword">(</span><span class="default">$IP</span><span class="keyword">);<br /><br />    </span><span class="default">$ip_ip_net </span><span class="keyword">= </span><span class="default">$ip_ip </span><span class="keyword">&amp; </span><span class="default">$ip_mask</span><span class="keyword">;<br /><br />    return (</span><span class="default">$ip_ip_net </span><span class="keyword">== </span><span class="default">$ip_net</span><span class="keyword">);<br />  }<br /></span><span class="default">?&gt;<br /></span>call example: <span class="default">&lt;?php </span><span class="keyword">echo </span><span class="default">ipCheck </span><span class="keyword">(</span><span class="string">"192.168.1.23"</span><span class="keyword">, </span><span class="string">"192.168.1.0/24"</span><span class="keyword">); </span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121090">  <div class="votes">
    <div id="Vu121090">
    <a href="/manual/vote-note.php?id=121090&amp;page=ref.network&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121090">
    <a href="/manual/vote-note.php?id=121090&amp;page=ref.network&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121090" title="65% like this...">
    11
    </div>
  </div>
  <a href="#121090" class="name">
  <strong class="user"><em>Anton Avramov - lukav at lukav dot com</em></strong></a><a class="genanchor" href="#121090"> &para;</a><div class="date" title="2017-05-16 02:41"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121090">
<div class="phpcode"><code><span class="html">An improved version of claudiu at cnixs dot com not using split and working with the following: <br />ip: 192.168.101.123, CIRD: 192.168.101.144/24 <br /><br /><span class="default">&lt;?php <br /></span><span class="keyword">function </span><span class="default">ipCIDRCheck </span><span class="keyword">(</span><span class="default">$IP</span><span class="keyword">, </span><span class="default">$CIDR</span><span class="keyword">) {<br />    list (</span><span class="default">$net</span><span class="keyword">, </span><span class="default">$mask</span><span class="keyword">) = </span><span class="default">explode </span><span class="keyword">(</span><span class="string">'/'</span><span class="keyword">, </span><span class="default">$CIDR</span><span class="keyword">);<br />    <br />    </span><span class="default">$ip_net </span><span class="keyword">= </span><span class="default">ip2long </span><span class="keyword">(</span><span class="default">$net</span><span class="keyword">);<br />    </span><span class="default">$ip_mask </span><span class="keyword">= ~((</span><span class="default">1 </span><span class="keyword">&lt;&lt; (</span><span class="default">32 </span><span class="keyword">- </span><span class="default">$mask</span><span class="keyword">)) - </span><span class="default">1</span><span class="keyword">);<br /><br />    </span><span class="default">$ip_ip </span><span class="keyword">= </span><span class="default">ip2long </span><span class="keyword">(</span><span class="default">$IP</span><span class="keyword">);<br /><br />    return ((</span><span class="default">$ip_ip </span><span class="keyword">&amp; </span><span class="default">$ip_mask</span><span class="keyword">) == (</span><span class="default">$ip_net </span><span class="keyword">&amp; </span><span class="default">$ip_mask</span><span class="keyword">));<br />  }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="119478">  <div class="votes">
    <div id="Vu119478">
    <a href="/manual/vote-note.php?id=119478&amp;page=ref.network&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119478">
    <a href="/manual/vote-note.php?id=119478&amp;page=ref.network&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119478" title="61% like this...">
    4
    </div>
  </div>
  <a href="#119478" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#119478"> &para;</a><div class="date" title="2016-06-16 05:15"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119478">
<div class="phpcode"><code><span class="html">improved version of philippe-at-cyberabuse.org's answer:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">cidrconv</span><span class="keyword">(</span><span class="default">$net</span><span class="keyword">) { <br />    </span><span class="default">$start </span><span class="keyword">= </span><span class="default">strtok</span><span class="keyword">(</span><span class="default">$net</span><span class="keyword">,</span><span class="string">"/"</span><span class="keyword">); <br />    </span><span class="default">$n </span><span class="keyword">= </span><span class="default">3 </span><span class="keyword">- </span><span class="default">substr_count</span><span class="keyword">(</span><span class="default">$net</span><span class="keyword">, </span><span class="string">"."</span><span class="keyword">); <br />    if (</span><span class="default">$n </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">)<br />    {<br />        for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">$n</span><span class="keyword">;</span><span class="default">$i </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">--)<br />            </span><span class="default">$start </span><span class="keyword">.= </span><span class="string">".0"</span><span class="keyword">;<br />    } <br />    </span><span class="default">$bits1 </span><span class="keyword">= </span><span class="default">str_pad</span><span class="keyword">(</span><span class="default">decbin</span><span class="keyword">(</span><span class="default">ip2long</span><span class="keyword">(</span><span class="default">$start</span><span class="keyword">)), </span><span class="default">32</span><span class="keyword">, </span><span class="string">"0"</span><span class="keyword">, </span><span class="default">STR_PAD_LEFT</span><span class="keyword">);<br />    </span><span class="default">$net </span><span class="keyword">= (</span><span class="default">1 </span><span class="keyword">&lt;&lt; (</span><span class="default">32 </span><span class="keyword">- </span><span class="default">substr</span><span class="keyword">(</span><span class="default">strstr</span><span class="keyword">(</span><span class="default">$net</span><span class="keyword">, </span><span class="string">"/"</span><span class="keyword">), </span><span class="default">1</span><span class="keyword">))) - </span><span class="default">1</span><span class="keyword">; <br />    </span><span class="default">$bits2 </span><span class="keyword">= </span><span class="default">str_pad</span><span class="keyword">(</span><span class="default">decbin</span><span class="keyword">(</span><span class="default">$net</span><span class="keyword">), </span><span class="default">32</span><span class="keyword">, </span><span class="string">"0"</span><span class="keyword">, </span><span class="default">STR_PAD_LEFT</span><span class="keyword">); <br />    </span><span class="default">$final </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br />    for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">32</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)<br />    { <br />        if (</span><span class="default">$bits1</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] == </span><span class="default">$bits2</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]) </span><span class="default">$final </span><span class="keyword">.= </span><span class="default">$bits1</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]; <br />        if (</span><span class="default">$bits1</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] == </span><span class="default">1 </span><span class="keyword">and </span><span class="default">$bits2</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] == </span><span class="default">0</span><span class="keyword">) </span><span class="default">$final </span><span class="keyword">.= </span><span class="default">$bits1</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]; <br />        if (</span><span class="default">$bits1</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] == </span><span class="default">0 </span><span class="keyword">and </span><span class="default">$bits2</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] == </span><span class="default">1</span><span class="keyword">) </span><span class="default">$final </span><span class="keyword">.= </span><span class="default">$bits2</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]; <br />    } <br />    return array(</span><span class="default">$start</span><span class="keyword">, </span><span class="default">long2ip</span><span class="keyword">(</span><span class="default">bindec</span><span class="keyword">(</span><span class="default">$final</span><span class="keyword">))); <br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="75922">  <div class="votes">
    <div id="Vu75922">
    <a href="/manual/vote-note.php?id=75922&amp;page=ref.network&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75922">
    <a href="/manual/vote-note.php?id=75922&amp;page=ref.network&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75922" title="55% like this...">
    2
    </div>
  </div>
  <a href="#75922" class="name">
  <strong class="user"><em>David GASTALDIN</em></strong></a><a class="genanchor" href="#75922"> &para;</a><div class="date" title="2007-06-21 08:12"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75922">
<div class="phpcode"><code><span class="html">Here a IP-Range to CIDRs function that I wrote for the purpose of filling my Postfix client.cidr with ripe-ncc data to block spamming from useless countries. Strcmp functions are meant to work around the silly PHP string comparison which inevitably tries compare strings as numbers when possible. I'll make no comment about that fact ... bit I have to bite my tong hard :<br /><br />function PlageVersCIDRs($ip_min, $ip_max) {<br />    $cidrs = array();<br />    $ip_min_bin = sprintf('%032b', $ip_min);<br />    $ip_max_bin = sprintf('%032b', $ip_max);<br />    $ip_cour_bin = $ip_min_bin;<br />    while (strcmp($ip_cour_bin, $ip_max_bin) &lt;= 0) {<br />        $lng_reseau = 32;<br />        $ip_reseau_bin = $ip_cour_bin;<br />        while (($ip_cour_bin[$lng_reseau - 1] == '0') &amp;&amp; (strcmp(substr_replace($ip_reseau_bin, '1', $lng_reseau - 1, 1), $ip_max_bin) &lt;= 0)) {<br />            $ip_reseau_bin[$lng_reseau - 1] = '1';<br />            $lng_reseau--;<br />        }<br />        $cidrs[] = long2ip(bindec($ip_cour_bin)).'/'.$lng_reseau;<br />        $ip_cour_bin = sprintf('%032b', bindec($ip_reseau_bin) + 1);<br />    }<br />    return $cidrs;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="17580">  <div class="votes">
    <div id="Vu17580">
    <a href="/manual/vote-note.php?id=17580&amp;page=ref.network&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd17580">
    <a href="/manual/vote-note.php?id=17580&amp;page=ref.network&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V17580" title="55% like this...">
    2
    </div>
  </div>
  <a href="#17580" class="name">
  <strong class="user"><em>philippe-at-cyberabuse.org</em></strong></a><a class="genanchor" href="#17580"> &para;</a><div class="date" title="2001-12-14 07:46"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom17580">
<div class="phpcode"><code><span class="html">PHP miss CIDR functions.
<br />
<br />This one will convert a CIDR like this:
<br />0.0.0.0/16 -&gt; 0.0.0.0 - 0.0.255.255
<br />127.0/16 -&gt; 127.0.0.0 - 127.0.255.255
<br />etc...
<br />
<br />function cidrconv($net) {
<br />$start=strtok($net,"/");
<br />$n=3-substr_count($net, ".");
<br />if ($n&gt;0) { for ($i=$n;$i&gt;0;$i--) $start.=".0"; }
<br />$bits1=str_pad(decbin(ip2long($start)),32,"0","STR_PAD_LEFT");
<br />$net=pow(2,(32-substr(strstr($net,"/"),1)))-1;
<br />$bits2=str_pad(decbin($net),32,"0","STR_PAD_LEFT");
<br />for ($i=0;$i&lt;32;$i++) {
<br />if ($bits1[$i]==$bits2[$i]) $final.=$bits1[$i];
<br />if ($bits1[$i]==1 and $bits2[$i]==0) $final.=$bits1[$i];
<br />if ($bits1[$i]==0 and $bits2[$i]==1) $final.=$bits2[$i];
<br />}
<br />return $start." - ".long2ip(bindec($final));
<br />}</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=ref.network&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.network.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.network.php">Network</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.network.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="network.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="network.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="current">
                            <a href="ref.network.php" title="Network Functions">Network Functions</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                    </ul>
    </aside>


  </div><!-- layout -->

  <footer>
    <div class="container footer-content">
      <div class="row-fluid">
      <ul class="footmenu">
        <li><a href="/manual/en/copyright.php">Copyright &copy; 2001-2025 The PHP Documentation Group</a></li>
        <li><a href="/my.php">My PHP.net</a></li>
        <li><a href="/contact.php">Contact</a></li>
        <li><a href="/sites.php">Other PHP.net sites</a></li>
        <li><a href="/privacy.php">Privacy policy</a></li>
      </ul>
      </div>
    </div>
  </footer>

    
<script src="/manual/en/js/ext/jquery-3.6.0.min.js"></script>
<script src="/manual/en/js/ext/FuzzySearch.min.js"></script>
<script src="/manual/en/js/ext/mousetrap.min.js"></script>
<script src="/manual/en/js/ext/jquery.scrollTo.min.js"></script>
<script src="/manual/en/js/search.js"></script>
<script src="/manual/en/js/common.js"></script>
<script type="module" src="/manual/en/js/interactive-examples.js"></script>

<a id="toTop" href="javascript:;"><span id="toTopHover"></span><img width="40" height="40" alt="To Top" src="/images/to-top@2x.png"></a>

<div id="search-modal__backdrop" class="search-modal__backdrop">
  <div
    role="dialog"
    aria-label="Search modal"
    id="search-modal"
    class="search-modal"
  >
    <div class="search-modal__header">
      <div class="search-modal__form">
        <div class="search-modal__input-icon">
          <!-- https://feathericons.com search -->
          <svg xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true"
            width="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <circle cx="11" cy="11" r="8"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
          </svg>
        </div>
        <input
          type="search"
          id="search-modal__input"
          class="search-modal__input"
          placeholder="Search docs"
          aria-label="Search docs"
        />
      </div>

      <button aria-label="Close" class="search-modal__close">
        <!-- https://pictogrammers.com/library/mdi/icon/close/ -->
        <svg
          xmlns="http://www.w3.org/2000/svg"
          aria-hidden="true"
          width="24"
          viewBox="0 0 24 24"
        >
          <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z"/>
        </svg>
      </button>
    </div>
    <div
      role="listbox"
      aria-label="Search results"
      id="search-modal__results"
      class="search-modal__results"
    ></div>
    <div class="search-modal__helper-text">
      <div>
        <kbd>↑</kbd> and <kbd>↓</kbd> to navigate •
        <kbd>Enter</kbd> to select •
        <kbd>Esc</kbd> to close
      </div>
      <div>
        Press <kbd>Enter</kbd> without
        selection to search using Google
      </div>
    </div>
  </div>
</div>

</body>
</html>
