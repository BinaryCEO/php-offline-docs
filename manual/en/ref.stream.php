<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Stream Functions - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/ref.stream.php">
 <link rel="shorturl" href="https://www.php.net/stream">
 <link rel="alternate" href="https://www.php.net/stream" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.stream.php">
 <link rel="prev" href="https://www.php.net/manual/en/streamwrapper.url-stat.php">
 <link rel="next" href="https://www.php.net/manual/en/function.stream-bucket-append.php">

 <link rel="alternate" href="https://www.php.net/manual/en/ref.stream.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/ref.stream.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/ref.stream.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/ref.stream.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/ref.stream.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/ref.stream.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/ref.stream.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/ref.stream.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/ref.stream.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/ref.stream.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/ref.stream.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Stream Functions" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Stream Functions - Manual" />
<meta name="twitter:description" content="Stream Functions" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Stream Functions - Manual" />
<meta itemprop="description" content="Stream Functions" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Stream Functions" />

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
        <a href="function.stream-bucket-append.php">
          stream_bucket_append &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="streamwrapper.url-stat.php">
          &laquo; streamWrapper::url_stat        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.other.php'>Other Basic Extensions</a></li>      <li><a href='book.stream.php'>Streams</a></li>      </ul>
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
            <option value='en/ref.stream.php' selected="selected">English</option>
            <option value='de/ref.stream.php'>German</option>
            <option value='es/ref.stream.php'>Spanish</option>
            <option value='fr/ref.stream.php'>French</option>
            <option value='it/ref.stream.php'>Italian</option>
            <option value='ja/ref.stream.php'>Japanese</option>
            <option value='pt_BR/ref.stream.php'>Brazilian Portuguese</option>
            <option value='ru/ref.stream.php'>Russian</option>
            <option value='tr/ref.stream.php'>Turkish</option>
            <option value='uk/ref.stream.php'>Ukrainian</option>
            <option value='zh/ref.stream.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="ref.stream" class="reference">
 <h1 class="title">Stream Functions</h1>

 














































































































































 























































































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="function.stream-bucket-append.php">stream_bucket_append</a> — Append bucket to brigade</li><li><a href="function.stream-bucket-make-writeable.php">stream_bucket_make_writeable</a> — Returns a bucket object from the brigade to operate on</li><li><a href="function.stream-bucket-new.php">stream_bucket_new</a> — Create a new bucket for use on the current stream</li><li><a href="function.stream-bucket-prepend.php">stream_bucket_prepend</a> — Prepend bucket to brigade</li><li><a href="function.stream-context-create.php">stream_context_create</a> — Creates a stream context</li><li><a href="function.stream-context-get-default.php">stream_context_get_default</a> — Retrieve the default stream context</li><li><a href="function.stream-context-get-options.php">stream_context_get_options</a> — Retrieve options for a stream/wrapper/context</li><li><a href="function.stream-context-get-params.php">stream_context_get_params</a> — Retrieves parameters from a context</li><li><a href="function.stream-context-set-default.php">stream_context_set_default</a> — Set the default stream context</li><li><a href="function.stream-context-set-option.php">stream_context_set_option</a> — Sets an option for a stream/wrapper/context</li><li><a href="function.stream-context-set-options.php">stream_context_set_options</a> — Sets options on the specified context</li><li><a href="function.stream-context-set-params.php">stream_context_set_params</a> — Set parameters for a stream/wrapper/context</li><li><a href="function.stream-copy-to-stream.php">stream_copy_to_stream</a> — Copies data from one stream to another</li><li><a href="function.stream-filter-append.php">stream_filter_append</a> — Attach a filter to a stream</li><li><a href="function.stream-filter-prepend.php">stream_filter_prepend</a> — Attach a filter to a stream</li><li><a href="function.stream-filter-register.php">stream_filter_register</a> — Register a user defined stream filter</li><li><a href="function.stream-filter-remove.php">stream_filter_remove</a> — Remove a filter from a stream</li><li><a href="function.stream-get-contents.php">stream_get_contents</a> — Reads remainder of a stream into a string</li><li><a href="function.stream-get-filters.php">stream_get_filters</a> — Retrieve list of registered filters</li><li><a href="function.stream-get-line.php">stream_get_line</a> — Gets line from stream resource up to a given delimiter</li><li><a href="function.stream-get-meta-data.php">stream_get_meta_data</a> — Retrieves header/meta data from streams/file pointers</li><li><a href="function.stream-get-transports.php">stream_get_transports</a> — Retrieve list of registered socket transports</li><li><a href="function.stream-get-wrappers.php">stream_get_wrappers</a> — Retrieve list of registered streams</li><li><a href="function.stream-is-local.php">stream_is_local</a> — Checks if a stream is a local stream</li><li><a href="function.stream-isatty.php">stream_isatty</a> — Check if a stream is a TTY</li><li><a href="function.stream-notification-callback.php">stream_notification_callback</a> — A callback function for the notification context parameter</li><li><a href="function.stream-register-wrapper.php">stream_register_wrapper</a> — Alias of stream_wrapper_register</li><li><a href="function.stream-resolve-include-path.php">stream_resolve_include_path</a> — Resolve filename against the include path</li><li><a href="function.stream-select.php">stream_select</a> — Runs the equivalent of the select() system call on the given
   arrays of streams with a timeout specified by seconds and microseconds</li><li><a href="function.stream-set-blocking.php">stream_set_blocking</a> — Set blocking/non-blocking mode on a stream</li><li><a href="function.stream-set-chunk-size.php">stream_set_chunk_size</a> — Set the stream chunk size</li><li><a href="function.stream-set-read-buffer.php">stream_set_read_buffer</a> — Set read file buffering on the given stream</li><li><a href="function.stream-set-timeout.php">stream_set_timeout</a> — Set timeout period on a stream</li><li><a href="function.stream-set-write-buffer.php">stream_set_write_buffer</a> — Sets write file buffering on the given stream</li><li><a href="function.stream-socket-accept.php">stream_socket_accept</a> — Accept a connection on a socket created by stream_socket_server</li><li><a href="function.stream-socket-client.php">stream_socket_client</a> — Open Internet or Unix domain socket connection</li><li><a href="function.stream-socket-enable-crypto.php">stream_socket_enable_crypto</a> — Turns encryption on/off on an already connected socket</li><li><a href="function.stream-socket-get-name.php">stream_socket_get_name</a> — Retrieve the name of the local or remote sockets</li><li><a href="function.stream-socket-pair.php">stream_socket_pair</a> — Creates a pair of connected, indistinguishable socket streams</li><li><a href="function.stream-socket-recvfrom.php">stream_socket_recvfrom</a> — Receives data from a socket, connected or not</li><li><a href="function.stream-socket-sendto.php">stream_socket_sendto</a> — Sends a message to a socket, whether it is connected or not</li><li><a href="function.stream-socket-server.php">stream_socket_server</a> — Create an Internet or Unix domain server socket</li><li><a href="function.stream-socket-shutdown.php">stream_socket_shutdown</a> — Shutdown a full-duplex connection</li><li><a href="function.stream-supports-lock.php">stream_supports_lock</a> — Tells whether the stream supports locking</li><li><a href="function.stream-wrapper-register.php">stream_wrapper_register</a> — Register a URL wrapper implemented as a PHP class</li><li><a href="function.stream-wrapper-restore.php">stream_wrapper_restore</a> — Restores a previously unregistered built-in wrapper</li><li><a href="function.stream-wrapper-unregister.php">stream_wrapper_unregister</a> — Unregister a URL wrapper</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/stream/reference.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fref.stream%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=ref.stream&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.stream.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">1 note</span></h3>
 </div><div id="allnotes">
  <div class="note" id="79222">  <div class="votes">
    <div id="Vu79222">
    <a href="/manual/vote-note.php?id=79222&amp;page=ref.stream&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79222">
    <a href="/manual/vote-note.php?id=79222&amp;page=ref.stream&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79222" title="77% like this...">
    10
    </div>
  </div>
  <a href="#79222" class="name">
  <strong class="user"><em>marcus at synchromedia dot co dot uk</em></strong></a><a class="genanchor" href="#79222"> &para;</a><div class="date" title="2007-11-15 03:13"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79222">
<div class="phpcode"><code><span class="html">I can't find any real documentation on the quoted-printable-encode stream filter, but I've gathered info from several places. It seems there are 4 options that can be passed in the param array as in my other note on this subject:<br /><br />line-length: integer, simply sets line length before a soft break is inserted<br />line-break-chars: Which char or chars to consider as a line break - note that "\r\n" will only match CRLF, not CR or LF, so make sure it matches your content.<br />binary: boolean, hex encodes all control chars, including spaces and line breaks, but leaves alphanumerics untouched<br />force-encode-first: Forcibly hex-encodes the first char on each line, even if it's alphanumeric. This is useful for avoiding corruption in some incompetent mail servers, like Exchange.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=ref.stream&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.stream.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.stream.php">Streams</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.stream.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="stream.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="stream.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="stream.filters.php" title="Stream Filters">Stream Filters</a>
                        </li>
                                                <li class="">
                            <a href="stream.contexts.php" title="Stream Contexts">Stream Contexts</a>
                        </li>
                                                <li class="">
                            <a href="stream.errors.php" title="Stream Errors">Stream Errors</a>
                        </li>
                                                <li class="">
                            <a href="stream.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="class.php-user-filter.php" title="php_&#8203;user_&#8203;filter">php_&#8203;user_&#8203;filter</a>
                        </li>
                                                <li class="">
                            <a href="class.streamwrapper.php" title="streamWrapper">streamWrapper</a>
                        </li>
                                                <li class="current">
                            <a href="ref.stream.php" title="Stream Functions">Stream Functions</a>
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
