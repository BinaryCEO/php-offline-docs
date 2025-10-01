<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: iconv_mime_encode - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.iconv-mime-encode.php">
 <link rel="shorturl" href="https://www.php.net/iconv-mime-encode">
 <link rel="alternate" href="https://www.php.net/iconv-mime-encode" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.iconv.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.iconv-mime-decode-headers.php">
 <link rel="next" href="https://www.php.net/manual/en/function.iconv-set-encoding.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.iconv-mime-encode.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.iconv-mime-encode.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.iconv-mime-encode.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.iconv-mime-encode.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.iconv-mime-encode.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.iconv-mime-encode.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.iconv-mime-encode.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.iconv-mime-encode.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.iconv-mime-encode.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.iconv-mime-encode.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.iconv-mime-encode.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Composes a MIME header field" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: iconv_mime_encode - Manual" />
<meta name="twitter:description" content="Composes a MIME header field" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: iconv_mime_encode - Manual" />
<meta itemprop="description" content="Composes a MIME header field" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Composes a MIME header field" />

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
        <a href="function.iconv-set-encoding.php">
          iconv_set_encoding &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.iconv-mime-decode-headers.php">
          &laquo; iconv_mime_decode_headers        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.international.php'>Human Language and Character Encoding Support</a></li>      <li><a href='book.iconv.php'>iconv</a></li>      <li><a href='ref.iconv.php'>iconv Functions</a></li>      </ul>
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
            <option value='en/function.iconv-mime-encode.php' selected="selected">English</option>
            <option value='de/function.iconv-mime-encode.php'>German</option>
            <option value='es/function.iconv-mime-encode.php'>Spanish</option>
            <option value='fr/function.iconv-mime-encode.php'>French</option>
            <option value='it/function.iconv-mime-encode.php'>Italian</option>
            <option value='ja/function.iconv-mime-encode.php'>Japanese</option>
            <option value='pt_BR/function.iconv-mime-encode.php'>Brazilian Portuguese</option>
            <option value='ru/function.iconv-mime-encode.php'>Russian</option>
            <option value='tr/function.iconv-mime-encode.php'>Turkish</option>
            <option value='uk/function.iconv-mime-encode.php'>Ukrainian</option>
            <option value='zh/function.iconv-mime-encode.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.iconv-mime-encode" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">iconv_mime_encode</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">iconv_mime_encode</span> &mdash; <span class="dc-title">Composes a <code class="literal">MIME</code> header field</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.iconv-mime-encode-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>iconv_mime_encode</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_name</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_value</code></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$options</code><span class="initializer"> = []</span></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Composes and returns a string that represents a valid <code class="literal">MIME</code>
   header field, which looks like the following:
   <div class="example-contents screen">
<div class="descriptioncode"><pre class="descriptioncode">Subject: =?ISO-8859-1?Q?Pr=FCfung_f=FCr?= Entwerfen von einer MIME kopfzeile</pre>
</div>
   </div>
   In the above example, &quot;Subject&quot; is the field name and the portion that
   begins with &quot;=?ISO-8859-1?...&quot; is the field value.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.iconv-mime-encode-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">field_name</code></dt>
     <dd>
      <p class="para">
       The field name.
      </p>
     </dd>
    
    
     <dt><code class="parameter">field_value</code></dt>
     <dd>
      <p class="para">
       The field value.
      </p>
     </dd>
    
    
     <dt><code class="parameter">options</code></dt>
     <dd>
      <p class="para">
       You can control the behaviour of <span class="function"><strong>iconv_mime_encode()</strong></span>
       by specifying an associative array that contains configuration items
       to the optional third parameter <code class="parameter">options</code>.
       The items supported by <span class="function"><strong>iconv_mime_encode()</strong></span> are
       listed below. Note that item names are treated case-sensitive.
       <table class="doctable table">
        <caption><strong>Configuration items supported by <span class="function"><strong>iconv_mime_encode()</strong></span></strong></caption>
        
         <thead>
          <tr>
           <th>Item</th>
           <th>Type</th>
           <th>Description</th>
           <th>Default value</th>
           <th>Example</th>
          </tr>

         </thead>

         <tbody class="tbody">
          <tr>
           <td>scheme</td>
           <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
           <td>
            Specifies the method to encode a field value by. The value of
            this item may be either &quot;B&quot; or &quot;Q&quot;, where &quot;B&quot; stands for
            <code class="literal">base64</code> encoding scheme and &quot;Q&quot; stands for
            <code class="literal">quoted-printable</code> encoding scheme.
           </td>
           <td>B</td>
           <td>B</td>
          </tr>

          <tr>
           <td>input-charset</td>
           <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
           <td>
            Specifies the character set in which the first parameter
            <code class="parameter">field_name</code> and the second parameter
            <code class="parameter">field_value</code> are presented. If not given,
            <span class="function"><strong>iconv_mime_encode()</strong></span> assumes those parameters
            are presented to it in the
            <a href="iconv.configuration.php" class="link">iconv.internal_encoding</a>
            ini setting.
           </td>
           <td>
            <a href="iconv.configuration.php" class="link">iconv.internal_encoding</a>
           </td>
           <td>ISO-8859-1</td>
          </tr>

          <tr>
           <td>output-charset</td>
           <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
           <td>
            Specifies the character set to use to compose the
            <code class="literal">MIME</code> header.
           </td>
           <td>
            <a href="iconv.configuration.php" class="link">iconv.internal_encoding</a>
           </td>
           <td>UTF-8</td>
          </tr>

          <tr>
           <td>line-length</td>
           <td><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></td>
           <td>
            Specifies the maximum length of the header lines. The resulting
            header is &quot;folded&quot; to a set of multiple lines in case
            the resulting header field would be longer than the value of this
            parameter, according to
            <a href="https://datatracker.ietf.org/doc/html/rfc2822" class="link external">&raquo;&nbsp;RFC2822 - Internet Message Format</a>.
            If not given, the length will be limited to 76 characters.
           </td>
           <td>76</td>
           <td>996</td>
          </tr>

          <tr>
           <td>line-break-chars</td>
           <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
           <td>
            Specifies the sequence of characters to append to each line
            as an end-of-line sign when &quot;folding&quot; is performed on a long header
            field. If not given, this defaults to &quot;\r\n&quot;
            (<code class="literal">CR</code> <code class="literal">LF</code>). Note that
            this parameter is always treated as an ASCII string regardless
            of the value of <code class="literal">input-charset</code>.
           </td>
           <td>\r\n</td>
           <td>\n</td>
          </tr>

         </tbody>
        
       </table>

      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.iconv-mime-encode-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns an encoded <code class="literal">MIME</code> field on success,
   or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> if an error occurs during the encoding.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.iconv-mime-encode-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2469">
    <p><strong>Example #1 <span class="function"><strong>iconv_mime_encode()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$preferences </span><span style="color: #007700">= array(<br />    </span><span style="color: #DD0000">"input-charset" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"ISO-8859-1"</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">"output-charset" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"UTF-8"</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">"line-length" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">76</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">"line-break-chars" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"\n"<br /></span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$preferences</span><span style="color: #007700">[</span><span style="color: #DD0000">"scheme"</span><span style="color: #007700">] = </span><span style="color: #DD0000">"Q"</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">// This yields "Subject: =?UTF-8?Q?Pr=C3=BCfung=20Pr=C3=BCfung?="<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">iconv_mime_encode</span><span style="color: #007700">(</span><span style="color: #DD0000">"Subject"</span><span style="color: #007700">, </span><span style="color: #DD0000">"Prüfung Prüfung"</span><span style="color: #007700">, </span><span style="color: #0000BB">$preferences</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$preferences</span><span style="color: #007700">[</span><span style="color: #DD0000">"scheme"</span><span style="color: #007700">] = </span><span style="color: #DD0000">"B"</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">// This yields "Subject: =?UTF-8?B?UHLDvGZ1bmcgUHLDvGZ1bmc=?="<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">iconv_mime_encode</span><span style="color: #007700">(</span><span style="color: #DD0000">"Subject"</span><span style="color: #007700">, </span><span style="color: #DD0000">"Prüfung Prüfung"</span><span style="color: #007700">, </span><span style="color: #0000BB">$preferences</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.iconv-mime-encode-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.imap-binary.php" class="function" rel="rdfs-seeAlso">imap_binary()</a> - Convert an 8bit string to a base64 string</span></li>
    <li><span class="function"><a href="function.mb-encode-mimeheader.php" class="function" rel="rdfs-seeAlso">mb_encode_mimeheader()</a> - Encode string for MIME header</span></li>
    <li><span class="function"><a href="function.imap-8bit.php" class="function" rel="rdfs-seeAlso">imap_8bit()</a> - Convert an 8bit string to a quoted-printable string</span></li>
    <li><span class="function"><a href="function.quoted-printable-encode.php" class="function" rel="rdfs-seeAlso">quoted_printable_encode()</a> - Convert a 8 bit string to a quoted-printable string</span></li>
   </ul>
  </p>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/iconv/functions/iconv-mime-encode.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.iconv-mime-encode%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.iconv-mime-encode&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.iconv-mime-encode.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="124737">  <div class="votes">
    <div id="Vu124737">
    <a href="/manual/vote-note.php?id=124737&amp;page=function.iconv-mime-encode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124737">
    <a href="/manual/vote-note.php?id=124737&amp;page=function.iconv-mime-encode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124737" title="66% like this...">
    1
    </div>
  </div>
  <a href="#124737" class="name">
  <strong class="user"><em>shaman_master at list dot ru</em></strong></a><a class="genanchor" href="#124737"> &para;</a><div class="date" title="2020-02-19 07:36"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124737">
<div class="phpcode"><code><span class="html">From mail(): Lines should not belarger than 70 characters.  Not 76 and not 72!</span></code></div>
  </div>
 </div>
  <div class="note" id="107897">  <div class="votes">
    <div id="Vu107897">
    <a href="/manual/vote-note.php?id=107897&amp;page=function.iconv-mime-encode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107897">
    <a href="/manual/vote-note.php?id=107897&amp;page=function.iconv-mime-encode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107897" title="60% like this...">
    1
    </div>
  </div>
  <a href="#107897" class="name">
  <strong class="user"><em>cedric at gn dot apc dot org</em></strong></a><a class="genanchor" href="#107897"> &para;</a><div class="date" title="2012-03-13 03:54"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107897">
<div class="phpcode"><code><span class="html">iconv_mime_encode() isn't directly suitable for encoding headers which include "specials" as described in RFC 1522 s4 &amp; s5, for example <br /><span class="default">&lt;?php<br />$mimeprefs </span><span class="keyword">= array (</span><span class="string">"scheme" </span><span class="keyword">=&gt; </span><span class="string">"Q"</span><span class="keyword">,<br />                    </span><span class="string">"input-charset" </span><span class="keyword">=&gt; </span><span class="string">"utf-8"</span><span class="keyword">,<br />                    </span><span class="string">"output-charset" </span><span class="keyword">=&gt; </span><span class="string">"utf-8"</span><span class="keyword">,<br />                    </span><span class="string">"line-break-chars" </span><span class="keyword">=&gt; </span><span class="string">"\n"</span><span class="keyword">);<br /></span><span class="default">$enc </span><span class="keyword">= </span><span class="default">iconv_mime_encode</span><span class="keyword">(</span><span class="string">'From'</span><span class="keyword">,  </span><span class="string">'"Réal Namé" &lt;user@example.com&gt;'</span><span class="keyword">, </span><span class="default">$prefs</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>will wrongly attempt to encode the angle brackets.  To use the function in place of mb_encode_mimeheader(), instead you need to encode the words separately, removing the superfluous field name:<br /><br /><span class="default">&lt;?php<br />$encoded </span><span class="keyword">= </span><span class="string">"From: \""</span><span class="keyword">. </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/^:\s+/'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">iconv_mime_encode</span><span class="keyword">(</span><span class="string">""</span><span class="keyword">, </span><span class="default">$real</span><span class="keyword">, </span><span class="default">$mimeprefs</span><span class="keyword">)).</span><span class="string">"\" &lt;</span><span class="default">$email</span><span class="string">&gt;"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />Also, values of "line-length" greater than 76 would be illegal under RFC 1522 and resulting encoded words may not be recognised.  (Not tested, but 72 would be safer.)</span></code></div>
  </div>
 </div>
  <div class="note" id="97983">  <div class="votes">
    <div id="Vu97983">
    <a href="/manual/vote-note.php?id=97983&amp;page=function.iconv-mime-encode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97983">
    <a href="/manual/vote-note.php?id=97983&amp;page=function.iconv-mime-encode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97983" title="50% like this...">
    0
    </div>
  </div>
  <a href="#97983" class="name">
  <strong class="user"><em>markus AT birth MINUS online DOT de</em></strong></a><a class="genanchor" href="#97983"> &para;</a><div class="date" title="2010-05-19 05:38"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97983">
<div class="phpcode"><code><span class="html">Looks like this function suffers from the same bug as mb_encode_mime() with long strings of non us-ascii characters. The function then returns false. This applies for utf-8 to utf-8 "conversion".<br /><br /><span class="default">&lt;?php<br />$subject </span><span class="keyword">= </span><span class="string">'Вы находитесь здесь: Главная &gt; продукт'</span><span class="keyword">;<br /><br /></span><span class="default">$prefs </span><span class="keyword">= array(<br />    </span><span class="string">'scheme' </span><span class="keyword">=&gt; </span><span class="string">'Q'</span><span class="keyword">,<br />    </span><span class="string">'input-charset' </span><span class="keyword">=&gt; </span><span class="string">'UTF-8'</span><span class="keyword">,<br />    </span><span class="string">'output-charset' </span><span class="keyword">=&gt; </span><span class="string">'UTF-8'</span><span class="keyword">,<br />    </span><span class="string">'line-length' </span><span class="keyword">=&gt; </span><span class="default">76</span><span class="keyword">,<br />    </span><span class="string">'line-break-chars' </span><span class="keyword">=&gt; </span><span class="string">"\r\n"</span><span class="keyword">,<br />);<br /><br />echo </span><span class="string">'Original: ' </span><span class="keyword">. </span><span class="default">$subject </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;<br /></span><span class="default">$enc </span><span class="keyword">= </span><span class="default">iconv_mime_encode</span><span class="keyword">( </span><span class="string">'Subject'</span><span class="keyword">, </span><span class="default">$subject</span><span class="keyword">, </span><span class="default">$prefs </span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">( </span><span class="default">$enc </span><span class="keyword">);  </span><span class="comment">// will show bool(false)<br /></span><span class="default">?&gt;<br /></span><br />As a workaround, you could explode() the value on spaces and encode each word separately. Then remove the "Subject: " in front of the resulting strings and join() them with "\r\n " (don't forget the SPACE after the \n) as separator.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.iconv-mime-encode&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.iconv-mime-encode.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.iconv.php">iconv Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.iconv.php" title="iconv">iconv</a>
                        </li>
                                                <li class="">
                            <a href="function.iconv-get-encoding.php" title="iconv_&#8203;get_&#8203;encoding">iconv_&#8203;get_&#8203;encoding</a>
                        </li>
                                                <li class="">
                            <a href="function.iconv-mime-decode.php" title="iconv_&#8203;mime_&#8203;decode">iconv_&#8203;mime_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.iconv-mime-decode-headers.php" title="iconv_&#8203;mime_&#8203;decode_&#8203;headers">iconv_&#8203;mime_&#8203;decode_&#8203;headers</a>
                        </li>
                                                <li class="current">
                            <a href="function.iconv-mime-encode.php" title="iconv_&#8203;mime_&#8203;encode">iconv_&#8203;mime_&#8203;encode</a>
                        </li>
                                                <li class="">
                            <a href="function.iconv-set-encoding.php" title="iconv_&#8203;set_&#8203;encoding">iconv_&#8203;set_&#8203;encoding</a>
                        </li>
                                                <li class="">
                            <a href="function.iconv-strlen.php" title="iconv_&#8203;strlen">iconv_&#8203;strlen</a>
                        </li>
                                                <li class="">
                            <a href="function.iconv-strpos.php" title="iconv_&#8203;strpos">iconv_&#8203;strpos</a>
                        </li>
                                                <li class="">
                            <a href="function.iconv-strrpos.php" title="iconv_&#8203;strrpos">iconv_&#8203;strrpos</a>
                        </li>
                                                <li class="">
                            <a href="function.iconv-substr.php" title="iconv_&#8203;substr">iconv_&#8203;substr</a>
                        </li>
                                                <li class="">
                            <a href="function.ob-iconv-handler.php" title="ob_&#8203;iconv_&#8203;handler">ob_&#8203;iconv_&#8203;handler</a>
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
