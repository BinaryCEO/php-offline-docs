<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: quoted_printable_decode - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.quoted-printable-decode.php">
 <link rel="shorturl" href="https://www.php.net/quoted-printable-decode">
 <link rel="alternate" href="https://www.php.net/quoted-printable-decode" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.strings.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.printf.php">
 <link rel="next" href="https://www.php.net/manual/en/function.quoted-printable-encode.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.quoted-printable-decode.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.quoted-printable-decode.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.quoted-printable-decode.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.quoted-printable-decode.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.quoted-printable-decode.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.quoted-printable-decode.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.quoted-printable-decode.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.quoted-printable-decode.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.quoted-printable-decode.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.quoted-printable-decode.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.quoted-printable-decode.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Convert a quoted-printable string to an 8 bit string" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: quoted_printable_decode - Manual" />
<meta name="twitter:description" content="Convert a quoted-printable string to an 8 bit string" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: quoted_printable_decode - Manual" />
<meta itemprop="description" content="Convert a quoted-printable string to an 8 bit string" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Convert a quoted-printable string to an 8 bit string" />

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
        <a href="function.quoted-printable-encode.php">
          quoted_printable_encode &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.printf.php">
          &laquo; printf        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.text.php'>Text Processing</a></li>      <li><a href='book.strings.php'>Strings</a></li>      <li><a href='ref.strings.php'>String Functions</a></li>      </ul>
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
            <option value='en/function.quoted-printable-decode.php' selected="selected">English</option>
            <option value='de/function.quoted-printable-decode.php'>German</option>
            <option value='es/function.quoted-printable-decode.php'>Spanish</option>
            <option value='fr/function.quoted-printable-decode.php'>French</option>
            <option value='it/function.quoted-printable-decode.php'>Italian</option>
            <option value='ja/function.quoted-printable-decode.php'>Japanese</option>
            <option value='pt_BR/function.quoted-printable-decode.php'>Brazilian Portuguese</option>
            <option value='ru/function.quoted-printable-decode.php'>Russian</option>
            <option value='tr/function.quoted-printable-decode.php'>Turkish</option>
            <option value='uk/function.quoted-printable-decode.php'>Ukrainian</option>
            <option value='zh/function.quoted-printable-decode.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.quoted-printable-decode" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">quoted_printable_decode</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">quoted_printable_decode</span> &mdash; <span class="dc-title">Convert a quoted-printable string to an 8 bit string</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.quoted-printable-decode-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>quoted_printable_decode</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string</code></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
   This function returns an 8-bit binary string corresponding to the decoded
   quoted printable string (according to <a href="https://datatracker.ietf.org/doc/html/rfc2045" class="link external">&raquo;&nbsp;RFC2045</a>, section 6.7, not <a href="https://datatracker.ietf.org/doc/html/rfc2821" class="link external">&raquo;&nbsp;RFC2821</a>, section 4.5.2, so additional periods
   are not stripped from the beginning of line).
  </p>
  <p class="para">
   This function is similar to <span class="function"><a href="function.imap-qprint.php" class="function">imap_qprint()</a></span>, except this
   one does not require the IMAP module to work.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.quoted-printable-decode-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">string</code></dt>
     <dd>
      <p class="para">
       The input string.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.quoted-printable-decode-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the 8-bit binary string.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.quoted-printable-decode-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5104">
    <p><strong>Example #1 <span class="function"><strong>quoted_printable_decode()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$encoded </span><span style="color: #007700">= </span><span style="color: #0000BB">quoted_printable_encode</span><span style="color: #007700">(</span><span style="color: #DD0000">'Möchten Sie ein paar Äpfel?'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$encoded</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">quoted_printable_decode</span><span style="color: #007700">(</span><span style="color: #0000BB">$encoded</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">string(37) &quot;M=C3=B6chten Sie ein paar =C3=84pfel?&quot;
string(29) &quot;Möchten Sie ein paar Äpfel?&quot;</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.quoted-printable-decode-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
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
        <a href="https://github.com/php/doc-en/blob/master/reference/strings/functions/quoted-printable-decode.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.quoted-printable-decode%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.quoted-printable-decode&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.quoted-printable-decode.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">21 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="125548">  <div class="votes">
    <div id="Vu125548">
    <a href="/manual/vote-note.php?id=125548&amp;page=function.quoted-printable-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125548">
    <a href="/manual/vote-note.php?id=125548&amp;page=function.quoted-printable-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125548" title="91% like this...">
    10
    </div>
  </div>
  <a href="#125548" class="name">
  <strong class="user"><em>jab_creations at yahoo dot com</em></strong></a><a class="genanchor" href="#125548"> &para;</a><div class="date" title="2020-11-28 08:01"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125548">
<div class="phpcode"><code><span class="html">If you're getting black diamonds or weird characters that seemingly block an echo but still encounter strlen($string) &gt; 0 you're probably encountering an encoding issue. Unlike the people writing ENCODE functions on a DECODE page I will actually talk about DECODE on a DECODE page.<br /><br />The specific problem I encountered was that an email was encoded using a Russian encoding (KOI8-R) though I output everything as UTF-8 because: compatibility.<br /><br />If you try to do this with a Russian encoding:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">echo </span><span class="default">quoted_printable_decode</span><span class="keyword">(</span><span class="string">'=81'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />You'll get that corrupted data.<br /><br />I did a couple of tests and it turns out the following is how you nest the mb_convert_encoding function:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">echo </span><span class="string">'&lt;p&gt;Test: "'</span><span class="keyword">.</span><span class="default">mb_convert_encoding</span><span class="keyword">(</span><span class="default">quoted_printable_decode</span><span class="keyword">(</span><span class="string">'=81'</span><span class="keyword">), </span><span class="string">'UTF-8'</span><span class="keyword">, </span><span class="string">'KOI8-R'</span><span class="keyword">).</span><span class="string">'".&lt;/p&gt;'</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />Unfortunately I could not find a character mapping table or anything listed under RFC 2045 Section 6.7. However I came across the website <a href="https://dencode.com/en/string/quoted-printable" rel="nofollow" target="_blank">https://dencode.com/en/string/quoted-printable</a> which allows you to manually choose the encoding (it's an open source site, they have a GIT repository for the morbidly curious).<br /><br />As it turns out the start of the range is relative to the encoding. So Latin (ISO-8859-1) and Russian (KOI8-R) will likely (not tested this) encode to different characters **relative to the string encoding**.</span></code></div>
  </div>
 </div>
  <div class="note" id="86449">  <div class="votes">
    <div id="Vu86449">
    <a href="/manual/vote-note.php?id=86449&amp;page=function.quoted-printable-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86449">
    <a href="/manual/vote-note.php?id=86449&amp;page=function.quoted-printable-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86449" title="66% like this...">
    3
    </div>
  </div>
  <a href="#86449" class="name">
  <strong class="user"><em>Karora</em></strong></a><a class="genanchor" href="#86449"> &para;</a><div class="date" title="2008-10-19 08:27"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86449">
<div class="phpcode"><code><span class="html">Taking a bunch of the earlier comments together, you can synthesize a nice short and reasonably efficient quoted_printable_encode function like this:
<br />
<br />Note that I put this in my standard library file, so I wrap it in a !function_exists in order that if there is a pre-existing PHP one it will just work and this will evaluate to a noop.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">if ( !</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">"quoted_printable_encode"</span><span class="keyword">) ) {
<br />  </span><span class="comment">/**
<br />  * Process a string to fit the requirements of RFC2045 section 6.7.  Note that
<br />  * this works, but replaces more characters than the minimum set. For readability
<br />  * the spaces aren't encoded as =20 though.
<br />  */
<br />  </span><span class="keyword">function </span><span class="default">quoted_printable_encode</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">) {
<br />    return </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/[^\r\n]{73}[^=\r\n]{2}/'</span><span class="keyword">, </span><span class="string">"$0=\r\n"</span><span class="keyword">, </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"%"</span><span class="keyword">,</span><span class="string">"="</span><span class="keyword">,</span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"%20"</span><span class="keyword">,</span><span class="string">" "</span><span class="keyword">,</span><span class="default">rawurlencode</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">))));
<br />  }
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />Regards,
<br />Andrew McMillan.</span></code></div>
  </div>
 </div>
  <div class="note" id="7445">  <div class="votes">
    <div id="Vu7445">
    <a href="/manual/vote-note.php?id=7445&amp;page=function.quoted-printable-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd7445">
    <a href="/manual/vote-note.php?id=7445&amp;page=function.quoted-printable-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V7445" title="59% like this...">
    4
    </div>
  </div>
  <a href="#7445" class="name">
  <strong class="user"><em>madmax at express dot ru</em></strong></a><a class="genanchor" href="#7445"> &para;</a><div class="date" title="2000-08-03 05:41"><strong>25 years ago</strong></div>
  <div class="text" id="Hcom7445">
<div class="phpcode"><code><span class="html">Some  browser (netscape, for example)
<br />send 8-bit quoted printable text like this:
<br />=C5=DD=A3=D2=C1= =DA
<br />
<br />"= =" means continuos word.
<br /> php function not detect this situations and translate in string like:
<br /> abcde=f</span></code></div>
  </div>
 </div>
  <div class="note" id="73385">  <div class="votes">
    <div id="Vu73385">
    <a href="/manual/vote-note.php?id=73385&amp;page=function.quoted-printable-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73385">
    <a href="/manual/vote-note.php?id=73385&amp;page=function.quoted-printable-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73385" title="62% like this...">
    2
    </div>
  </div>
  <a href="#73385" class="name">
  <strong class="user"><em>soletan at toxa dot de</em></strong></a><a class="genanchor" href="#73385"> &para;</a><div class="date" title="2007-02-20 03:54"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73385">
<div class="phpcode"><code><span class="html">Be warned! The method below for encoding text does not work as requested by RFC1521!<br /><br />Consider a line consisting of 75 'A' and a single é (or similar non-ASCII character) ... the method below would encode and return a line of 78 octets, breaking with RFC 1521, 5.1 Rule #5: "The Quoted-Printable encoding REQUIRES that encoded lines be no more than 76 characters long."<br /><br />Good QP-encoding takes a bit more than this.</span></code></div>
  </div>
 </div>
  <div class="note" id="85993">  <div class="votes">
    <div id="Vu85993">
    <a href="/manual/vote-note.php?id=85993&amp;page=function.quoted-printable-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85993">
    <a href="/manual/vote-note.php?id=85993&amp;page=function.quoted-printable-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85993" title="60% like this...">
    2
    </div>
  </div>
  <a href="#85993" class="name">
  <strong class="user"><em>zg</em></strong></a><a class="genanchor" href="#85993"> &para;</a><div class="date" title="2008-09-27 06:48"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85993">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">quoted_printable_encode</span><span class="keyword">( </span><span class="default">$str</span><span class="keyword">, </span><span class="default">$chunkLen </span><span class="keyword">= </span><span class="default">72 </span><span class="keyword">)<br />{<br />    </span><span class="default">$offset </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    <br />    </span><span class="default">$str </span><span class="keyword">= </span><span class="default">strtr</span><span class="keyword">(</span><span class="default">rawurlencode</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">), array(</span><span class="string">'%' </span><span class="keyword">=&gt; </span><span class="string">'='</span><span class="keyword">));<br />    </span><span class="default">$len </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">);<br />    </span><span class="default">$enc </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />    <br />    while ( </span><span class="default">$offset </span><span class="keyword">&lt; </span><span class="default">$len </span><span class="keyword">)<br />    {<br />        if ( </span><span class="default">$str</span><span class="keyword">{ </span><span class="default">$offset </span><span class="keyword">+ </span><span class="default">$chunkLen </span><span class="keyword">- </span><span class="default">1 </span><span class="keyword">} === </span><span class="string">'=' </span><span class="keyword">)<br />        {<br />            </span><span class="default">$line </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$offset</span><span class="keyword">, </span><span class="default">$chunkLen </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">);<br />            </span><span class="default">$offset </span><span class="keyword">+= </span><span class="default">$chunkLen </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">;<br />        }<br />        elseif ( </span><span class="default">$str</span><span class="keyword">{ </span><span class="default">$offset </span><span class="keyword">+ </span><span class="default">$chunkLen </span><span class="keyword">- </span><span class="default">2 </span><span class="keyword">} === </span><span class="string">'=' </span><span class="keyword">)<br />        {<br />            </span><span class="default">$line </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$offset</span><span class="keyword">, </span><span class="default">$chunkLen </span><span class="keyword">- </span><span class="default">2</span><span class="keyword">);<br />            </span><span class="default">$offset </span><span class="keyword">+= </span><span class="default">$chunkLen </span><span class="keyword">- </span><span class="default">2</span><span class="keyword">;<br />        }<br />        else <br />        {<br />            </span><span class="default">$line </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$offset</span><span class="keyword">, </span><span class="default">$chunkLen</span><span class="keyword">);<br />            </span><span class="default">$offset </span><span class="keyword">+= </span><span class="default">$chunkLen</span><span class="keyword">;<br />        }<br />        <br />        if ( </span><span class="default">$offset </span><span class="keyword">+ </span><span class="default">$chunkLen </span><span class="keyword">&lt; </span><span class="default">$len </span><span class="keyword">)<br />            </span><span class="default">$enc </span><span class="keyword">.= </span><span class="default">$line </span><span class="keyword">.</span><span class="string">"=\n"</span><span class="keyword">;<br />        else <br />            </span><span class="default">$enc </span><span class="keyword">.= </span><span class="default">$line</span><span class="keyword">;<br />    }<br />    <br />    return </span><span class="default">$enc</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="70516">  <div class="votes">
    <div id="Vu70516">
    <a href="/manual/vote-note.php?id=70516&amp;page=function.quoted-printable-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70516">
    <a href="/manual/vote-note.php?id=70516&amp;page=function.quoted-printable-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70516" title="57% like this...">
    1
    </div>
  </div>
  <a href="#70516" class="name">
  <strong class="user"><em>Thomas Pequet / Memotoo.com</em></strong></a><a class="genanchor" href="#70516"> &para;</a><div class="date" title="2006-10-19 06:15"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70516">
<div class="phpcode"><code><span class="html">If you want a function to do the reverse of "quoted_printable_decode()", follow the link you will find the "quoted_printable_encode()" function:<br /><a href="http://www.memotoo.com/softs/public/PHP/quoted" rel="nofollow" target="_blank">http://www.memotoo.com/softs/public/PHP/quoted</a> printable_encode.inc.php<br /><br />Compatible "ENCODING=QUOTED-PRINTABLE"<br />Example: <br />quoted_printable_encode(ut8_encode("c'est quand l'été ?")) <br />-&gt; "c'est quand l'=C3=A9t=C3=A9 ?"</span></code></div>
  </div>
 </div>
  <div class="note" id="124477">  <div class="votes">
    <div id="Vu124477">
    <a href="/manual/vote-note.php?id=124477&amp;page=function.quoted-printable-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124477">
    <a href="/manual/vote-note.php?id=124477&amp;page=function.quoted-printable-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124477" title="100% like this...">
    2
    </div>
  </div>
  <a href="#124477" class="name">
  <strong class="user"><em>sven at e7o dot de</em></strong></a><a class="genanchor" href="#124477"> &para;</a><div class="date" title="2019-12-06 12:13"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124477">
<div class="phpcode"><code><span class="html">If you're really lazy and producing HTML anyways and the end, just convert it to HTML entities and move the Unicode/ISO struggling to the document's encoding:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">qpd</span><span class="keyword">(</span><span class="default">$e</span><span class="keyword">)<br />{<br />    return </span><span class="default">preg_replace_callback</span><span class="keyword">(<br />        </span><span class="string">'/=([a-z0-9]{2})/i'</span><span class="keyword">,<br />        function (</span><span class="default">$m</span><span class="keyword">) {<br />            return </span><span class="string">'&amp;#x00' </span><span class="keyword">. </span><span class="default">$m</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] . </span><span class="string">';'</span><span class="keyword">;<br />        },<br />        </span><span class="default">$e<br />    </span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="113516">  <div class="votes">
    <div id="Vu113516">
    <a href="/manual/vote-note.php?id=113516&amp;page=function.quoted-printable-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113516">
    <a href="/manual/vote-note.php?id=113516&amp;page=function.quoted-printable-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113516" title="54% like this...">
    1
    </div>
  </div>
  <a href="#113516" class="name">
  <strong class="user"><em>yual at inbox dot ru</em></strong></a><a class="genanchor" href="#113516"> &para;</a><div class="date" title="2013-10-23 08:38"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113516">
<div class="phpcode"><code><span class="html">I use a hack for this bug:<br /><br />$str = str_replace("=\r\n", '', quoted_printable_encode($str));<br />if (strlen($str) &gt; 73) {$str = substr($str,0,74)."=\n".substr($str,74);}</span></code></div>
  </div>
 </div>
  <div class="note" id="55033">  <div class="votes">
    <div id="Vu55033">
    <a href="/manual/vote-note.php?id=55033&amp;page=function.quoted-printable-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd55033">
    <a href="/manual/vote-note.php?id=55033&amp;page=function.quoted-printable-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V55033" title="55% like this...">
    1
    </div>
  </div>
  <a href="#55033" class="name">
  <strong class="user"><em>steffen dot weber at computerbase dot de</em></strong></a><a class="genanchor" href="#55033"> &para;</a><div class="date" title="2005-07-22 02:08"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom55033">
<div class="phpcode"><code><span class="html">As the two digit hexadecimal representation SHOULD be in uppercase you want to use "=%02X" (uppercase X) instead of "=%02x" as the first argument to sprintf().</span></code></div>
  </div>
 </div>
  <div class="note" id="14139">  <div class="votes">
    <div id="Vu14139">
    <a href="/manual/vote-note.php?id=14139&amp;page=function.quoted-printable-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd14139">
    <a href="/manual/vote-note.php?id=14139&amp;page=function.quoted-printable-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V14139" title="54% like this...">
    1
    </div>
  </div>
  <a href="#14139" class="name">
  <strong class="user"><em>pob at medienrecht dot NOSPAM dot org</em></strong></a><a class="genanchor" href="#14139"> &para;</a><div class="date" title="2001-07-18 01:06"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom14139">
<div class="phpcode"><code><span class="html">If you do not have access to imap_* and do not want to use 
<br />?$message = chunk_split( base64_encode($message) );?
<br />because you want to be able to read the ?source? of your mails, you might want to try this:
<br />(any suggestions very welcome!)
<br />
<br />
<br />function qp_enc($input = "quoted-printable encoding test string", $line_max = 76) {
<br />
<br />    $hex = array('0','1','2','3','4','5','6','7','8','9','A','B','C','D','E','F');
<br />    $lines = preg_split("/(?:\r\n|\r|\n)/", $input);
<br />    $eol = "\r\n";
<br />    $escape = "=";
<br />    $output = "";
<br />
<br />    while( list(, $line) = each($lines) ) {
<br />        //$line = rtrim($line); // remove trailing white space -&gt; no =20\r\n necessary
<br />        $linlen = strlen($line);
<br />        $newline = "";
<br />        for($i = 0; $i &lt; $linlen; $i++) {
<br />            $c = substr($line, $i, 1);
<br />            $dec = ord($c);
<br />            if ( ($dec == 32) &amp;&amp; ($i == ($linlen - 1)) ) { // convert space at eol only
<br />                $c = "=20"; 
<br />            } elseif ( ($dec == 61) || ($dec &lt; 32 ) || ($dec &gt; 126) ) { // always encode "\t", which is *not* required
<br />                $h2 = floor($dec/16); $h1 = floor($dec%16); 
<br />                $c = $escape.$hex["$h2"].$hex["$h1"]; 
<br />            }
<br />            if ( (strlen($newline) + strlen($c)) &gt;= $line_max ) { // CRLF is not counted
<br />                $output .= $newline.$escape.$eol; // soft line break; " =\r\n" is okay
<br />                $newline = "";
<br />            }
<br />            $newline .= $c;
<br />        } // end of for
<br />        $output .= $newline.$eol;
<br />    }
<br />    return trim($output);
<br />
<br />}
<br />
<br />$eight_bit = "\xA7 \xC4 \xD6 \xDC \xE4 \xF6 \xFC \xDF         =          xxx             yyy       zzz          \r\n"
<br />            ." \xA7      \r \xC4 \n \xD6 \x09    "; 
<br />print $eight_bit."\r\n---------------\r\n";
<br />$encoded = qp_enc($eight_bit); 
<br />print $encoded;</span></code></div>
  </div>
 </div>
  <div class="note" id="73187">  <div class="votes">
    <div id="Vu73187">
    <a href="/manual/vote-note.php?id=73187&amp;page=function.quoted-printable-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73187">
    <a href="/manual/vote-note.php?id=73187&amp;page=function.quoted-printable-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73187" title="53% like this...">
    1
    </div>
  </div>
  <a href="#73187" class="name">
  <strong class="user"><em>legolas558</em></strong></a><a class="genanchor" href="#73187"> &para;</a><div class="date" title="2007-02-12 10:32"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73187">
<div class="phpcode"><code><span class="html">Please note that in the below encode function there is a bug!<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">if ((</span><span class="default">$c</span><span class="keyword">==</span><span class="default">0x3d</span><span class="keyword">) || (</span><span class="default">$c</span><span class="keyword">&gt;=</span><span class="default">0x80</span><span class="keyword">) || (</span><span class="default">$c</span><span class="keyword">&lt;</span><span class="default">0x20</span><span class="keyword">))<br /></span><span class="default">?&gt;<br /></span><br />$c should be checked against less or equal to encode spaces!<br /><br />so the correct code is<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">if ((</span><span class="default">$c</span><span class="keyword">==</span><span class="default">0x3d</span><span class="keyword">) || (</span><span class="default">$c</span><span class="keyword">&gt;=</span><span class="default">0x80</span><span class="keyword">) || (</span><span class="default">$c</span><span class="keyword">&lt;=</span><span class="default">0x20</span><span class="keyword">))<br /></span><span class="default">?&gt;<br /></span><br />Fix the code or post this note, please</span></code></div>
  </div>
 </div>
  <div class="note" id="86764">  <div class="votes">
    <div id="Vu86764">
    <a href="/manual/vote-note.php?id=86764&amp;page=function.quoted-printable-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86764">
    <a href="/manual/vote-note.php?id=86764&amp;page=function.quoted-printable-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86764" title="52% like this...">
    1
    </div>
  </div>
  <a href="#86764" class="name">
  <strong class="user"><em>andre at luyer dot nl</em></strong></a><a class="genanchor" href="#86764"> &para;</a><div class="date" title="2008-11-02 12:36"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86764">
<div class="phpcode"><code><span class="html">A small update for Andrew's code below. This one leaves the original CRLF pairs intact (and allowing the preg_replace to work as intended):<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">if (!</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">"quoted_printable_encode"</span><span class="keyword">)) {<br />  </span><span class="comment">/**<br />  * Process a string to fit the requirements of RFC2045 section 6.7. Note that<br />  * this works, but replaces more characters than the minimum set. For readability<br />  * the spaces and CRLF pairs aren't encoded though.<br />  */<br />  </span><span class="keyword">function </span><span class="default">quoted_printable_encode</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">) {<br />    return </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/[^\r\n]{73}[^=\r\n]{2}/'</span><span class="keyword">, </span><span class="string">"$0=\r\n"</span><span class="keyword">,<br />      </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"%"</span><span class="keyword">, </span><span class="string">"="</span><span class="keyword">, </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"%0D%0A"</span><span class="keyword">, </span><span class="string">"\r\n"</span><span class="keyword">, <br />        </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"%20"</span><span class="keyword">,</span><span class="string">" "</span><span class="keyword">,</span><span class="default">rawurlencode</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">)))));<br />  }<br />}<br /></span><span class="default">?&gt;<br /></span><br />Regards, André</span></code></div>
  </div>
 </div>
  <div class="note" id="89417">  <div class="votes">
    <div id="Vu89417">
    <a href="/manual/vote-note.php?id=89417&amp;page=function.quoted-printable-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89417">
    <a href="/manual/vote-note.php?id=89417&amp;page=function.quoted-printable-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89417" title="50% like this...">
    0
    </div>
  </div>
  <a href="#89417" class="name">
  <strong class="user"><em>feedr</em></strong></a><a class="genanchor" href="#89417"> &para;</a><div class="date" title="2009-03-06 02:39"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89417">
<div class="phpcode"><code><span class="html">Another (improved) version of quoted_printable_encode(). Please note the order of the array elements in str_replace().<br />I've just rewritten the previous function for better readability.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">if (!</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">"quoted_printable_encode"</span><span class="keyword">)) {<br />  </span><span class="comment">/**<br />  * Process a string to fit the requirements of RFC2045 section 6.7. Note that<br />  * this works, but replaces more characters than the minimum set. For readability<br />  * the spaces and CRLF pairs aren't encoded though.<br />  */<br />  </span><span class="keyword">function </span><span class="default">quoted_printable_encode</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">) {<br />        </span><span class="default">$string </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(array(</span><span class="string">'%20'</span><span class="keyword">, </span><span class="string">'%0D%0A'</span><span class="keyword">, </span><span class="string">'%'</span><span class="keyword">), array(</span><span class="string">' '</span><span class="keyword">, </span><span class="string">"\r\n"</span><span class="keyword">, </span><span class="string">'='</span><span class="keyword">), </span><span class="default">rawurlencode</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">));<br />        </span><span class="default">$string </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/[^\r\n]{73}[^=\r\n]{2}/'</span><span class="keyword">, </span><span class="string">"$0=\r\n"</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);<br /><br />        return </span><span class="default">$string</span><span class="keyword">;<br />  }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="85926">  <div class="votes">
    <div id="Vu85926">
    <a href="/manual/vote-note.php?id=85926&amp;page=function.quoted-printable-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85926">
    <a href="/manual/vote-note.php?id=85926&amp;page=function.quoted-printable-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85926" title="50% like this...">
    0
    </div>
  </div>
  <a href="#85926" class="name">
  <strong class="user"><em>Christian Albrecht</em></strong></a><a class="genanchor" href="#85926"> &para;</a><div class="date" title="2008-09-24 03:10"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85926">
<div class="phpcode"><code><span class="html">In Addition to david lionhead's function:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">quoted_printable_encode</span><span class="keyword">(</span><span class="default">$txt</span><span class="keyword">) {<br />    </span><span class="comment">/* Make sure there are no %20 or similar */<br />    </span><span class="default">$txt </span><span class="keyword">= </span><span class="default">rawurldecode</span><span class="keyword">(</span><span class="default">$txt</span><span class="keyword">);<br />    </span><span class="default">$tmp</span><span class="keyword">=</span><span class="string">""</span><span class="keyword">;<br />    </span><span class="default">$line</span><span class="keyword">=</span><span class="string">""</span><span class="keyword">;<br />    for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$txt</span><span class="keyword">);</span><span class="default">$i</span><span class="keyword">++) {<br />        if ((</span><span class="default">$txt</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]&gt;=</span><span class="string">'a' </span><span class="keyword">&amp;&amp; </span><span class="default">$txt</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]&lt;=</span><span class="string">'z'</span><span class="keyword">) || (</span><span class="default">$txt</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]&gt;=</span><span class="string">'A' </span><span class="keyword">&amp;&amp; </span><span class="default">$txt</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]&lt;=</span><span class="string">'Z'</span><span class="keyword">) || (</span><span class="default">$txt</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]&gt;=</span><span class="string">'0' </span><span class="keyword">&amp;&amp; </span><span class="default">$txt</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]&lt;=</span><span class="string">'9'</span><span class="keyword">)) {<br />            </span><span class="default">$line</span><span class="keyword">.=</span><span class="default">$txt</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];<br />            if (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$line</span><span class="keyword">)&gt;=</span><span class="default">75</span><span class="keyword">) {<br />                </span><span class="default">$tmp</span><span class="keyword">.=</span><span class="string">"</span><span class="default">$line</span><span class="string">=\n"</span><span class="keyword">;<br />                </span><span class="default">$line</span><span class="keyword">=</span><span class="string">""</span><span class="keyword">;<br />            }<br />        }<br />        else {<br />            </span><span class="comment">/* Important to differentiate this case from the above */<br />            </span><span class="keyword">if (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$line</span><span class="keyword">)&gt;=</span><span class="default">72</span><span class="keyword">) {<br />            </span><span class="default">$tmp</span><span class="keyword">.=</span><span class="string">"</span><span class="default">$line</span><span class="string">=\n"</span><span class="keyword">;<br />            </span><span class="default">$line</span><span class="keyword">=</span><span class="string">""</span><span class="keyword">;<br />            }<br />            </span><span class="default">$line</span><span class="keyword">.=</span><span class="string">"="</span><span class="keyword">.</span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">"%02X"</span><span class="keyword">,</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$txt</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]));<br />        }<br />    }<br />    </span><span class="default">$tmp</span><span class="keyword">.=</span><span class="string">"</span><span class="default">$line</span><span class="string">\n"</span><span class="keyword">;<br />    return </span><span class="default">$tmp</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="85157">  <div class="votes">
    <div id="Vu85157">
    <a href="/manual/vote-note.php?id=85157&amp;page=function.quoted-printable-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85157">
    <a href="/manual/vote-note.php?id=85157&amp;page=function.quoted-printable-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85157" title="50% like this...">
    0
    </div>
  </div>
  <a href="#85157" class="name">
  <strong class="user"><em>david at lionhead dot nl</em></strong></a><a class="genanchor" href="#85157"> &para;</a><div class="date" title="2008-08-18 05:54"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85157">
<div class="phpcode"><code><span class="html">My version of quoted_printable encode, as the convert.quoted-printable-encode filter breaks on outlook express. This one seems to work on express/outlook/thunderbird/gmail.<br /><br />function quoted_printable_encode($txt) {<br />    $tmp="";<br />    $line="";<br />    for ($i=0;$i&lt;strlen($txt);$i++) {<br />        if (($txt[$i]&gt;='a' &amp;&amp; $txt[$i]&lt;='z') || ($txt[$i]&gt;='A' &amp;&amp; $txt[$i]&lt;='Z') || ($txt[$i]&gt;='0' &amp;&amp; $txt[$i]&lt;='9'))<br />            $line.=$txt[$i];<br />        else<br />            $line.="=".sprintf("%02X",ord($txt[$i]));<br />        if (strlen($line)&gt;=75) {<br />            $tmp.="$line=\n";<br />            $line="";<br />        }<br />    }<br />    $tmp.="$line\n";<br />    return $tmp;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="82000">  <div class="votes">
    <div id="Vu82000">
    <a href="/manual/vote-note.php?id=82000&amp;page=function.quoted-printable-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82000">
    <a href="/manual/vote-note.php?id=82000&amp;page=function.quoted-printable-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82000" title="50% like this...">
    0
    </div>
  </div>
  <a href="#82000" class="name">
  <strong class="user"><em>vita dot plachy at seznam dot cz</em></strong></a><a class="genanchor" href="#82000"> &para;</a><div class="date" title="2008-03-23 08:22"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82000">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php
<br />$text </span><span class="keyword">= &lt;&lt;&lt;EOF
<br /></span><span class="string">This function enables you to convert text to a quoted-printable string as well as to create encoded-words used in email headers (see <a href="http://www.faqs.org/rfcs/rfc2047.html" rel="nofollow" target="_blank">http://www.faqs.org/rfcs/rfc2047.html</a>).
<br />
<br />No line of returned text will be longer than specified. Encoded-words will not contain a newline character. Special characters are removed.
<br /></span><span class="keyword">EOF;
<br />
<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">'QP_LINE_LENGTH'</span><span class="keyword">, </span><span class="default">75</span><span class="keyword">);
<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">'QP_LINE_SEPARATOR'</span><span class="keyword">, </span><span class="string">"\r\n"</span><span class="keyword">);
<br />
<br />function </span><span class="default">quoted_printable_encode</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$encodedWord </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">)
<br />{
<br />    if(!</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'//u'</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">)) {
<br />        throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">'Input string is not valid UTF-8'</span><span class="keyword">);
<br />    }
<br />    
<br />    static </span><span class="default">$wordStart </span><span class="keyword">= </span><span class="string">'=?UTF-8?Q?'</span><span class="keyword">;
<br />    static </span><span class="default">$wordEnd </span><span class="keyword">= </span><span class="string">'?='</span><span class="keyword">;
<br />    static </span><span class="default">$endl </span><span class="keyword">= </span><span class="default">QP_LINE_SEPARATOR</span><span class="keyword">;
<br />    
<br />    </span><span class="default">$lineLength </span><span class="keyword">= </span><span class="default">$encodedWord
<br />        </span><span class="keyword">? </span><span class="default">QP_LINE_LENGTH </span><span class="keyword">- </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$wordStart</span><span class="keyword">) - </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$wordEnd</span><span class="keyword">)
<br />        : </span><span class="default">QP_LINE_LENGTH</span><span class="keyword">;
<br />    
<br />    </span><span class="default">$string </span><span class="keyword">= </span><span class="default">$encodedWord
<br />        </span><span class="keyword">? </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'~[\r\n]+~'</span><span class="keyword">, </span><span class="string">' '</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">)    </span><span class="comment">// we need encoded word to be single line
<br />        </span><span class="keyword">: </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'~\r\n?~'</span><span class="keyword">, </span><span class="string">"\n"</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);    </span><span class="comment">// normalize line endings
<br />    </span><span class="default">$string </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'~[\x00-\x08\x0B-\x1F]+~'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);    </span><span class="comment">// remove control characters
<br />    
<br />    </span><span class="default">$output </span><span class="keyword">= </span><span class="default">$encodedWord </span><span class="keyword">? </span><span class="default">$wordStart </span><span class="keyword">: </span><span class="string">''</span><span class="keyword">;
<br />    </span><span class="default">$charsLeft </span><span class="keyword">= </span><span class="default">$lineLength</span><span class="keyword">;
<br />    
<br />    </span><span class="default">$chr </span><span class="keyword">= isset(</span><span class="default">$string</span><span class="keyword">{</span><span class="default">0</span><span class="keyword">}) ? </span><span class="default">$string</span><span class="keyword">{</span><span class="default">0</span><span class="keyword">} : </span><span class="default">null</span><span class="keyword">;
<br />    </span><span class="default">$ord </span><span class="keyword">= </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$chr</span><span class="keyword">);
<br />    
<br />    for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; isset(</span><span class="default">$chr</span><span class="keyword">); </span><span class="default">$i</span><span class="keyword">++) {
<br />        </span><span class="default">$nextChr </span><span class="keyword">= isset(</span><span class="default">$string</span><span class="keyword">{</span><span class="default">$i </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">}) ? </span><span class="default">$string</span><span class="keyword">{</span><span class="default">$i </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">} : </span><span class="default">null</span><span class="keyword">;
<br />        </span><span class="default">$nextOrd </span><span class="keyword">= </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$nextChr</span><span class="keyword">);
<br />        
<br />        if (
<br />            </span><span class="default">$ord </span><span class="keyword">&gt; </span><span class="default">127 </span><span class="keyword">or    </span><span class="comment">// high byte value
<br />            </span><span class="default">$ord </span><span class="keyword">=== </span><span class="default">95 </span><span class="keyword">or    </span><span class="comment">// underscore "_"
<br />            </span><span class="default">$ord </span><span class="keyword">=== </span><span class="default">63 </span><span class="keyword">&amp;&amp; </span><span class="default">$encodedWord </span><span class="keyword">or    </span><span class="comment">// "?" in encoded word
<br />            </span><span class="default">$ord </span><span class="keyword">=== </span><span class="default">61 </span><span class="keyword">or    </span><span class="comment">// equal sign "="
<br />            // space or tab in encoded word or at line end
<br />            </span><span class="default">$ord </span><span class="keyword">=== </span><span class="default">32 </span><span class="keyword">|| </span><span class="default">$ord </span><span class="keyword">=== </span><span class="default">9 </span><span class="keyword">and </span><span class="default">$encodedWord </span><span class="keyword">|| !isset(</span><span class="default">$nextOrd</span><span class="keyword">) || </span><span class="default">$nextOrd </span><span class="keyword">=== </span><span class="default">10
<br />        </span><span class="keyword">) {
<br />            </span><span class="default">$chr </span><span class="keyword">= </span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">'=%02X'</span><span class="keyword">, </span><span class="default">$ord</span><span class="keyword">);    
<br />        }
<br />        
<br />        if (</span><span class="default">$ord </span><span class="keyword">=== </span><span class="default">10</span><span class="keyword">) {    </span><span class="comment">// line feed
<br />            </span><span class="default">$output </span><span class="keyword">.= </span><span class="default">$endl</span><span class="keyword">;
<br />            </span><span class="default">$charsLeft </span><span class="keyword">= </span><span class="default">$lineLength</span><span class="keyword">;
<br />        } elseif (
<br />            </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$chr</span><span class="keyword">) &lt; </span><span class="default">$charsLeft </span><span class="keyword">or
<br />            </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$chr</span><span class="keyword">) === </span><span class="default">$charsLeft </span><span class="keyword">and </span><span class="default">$nextOrd </span><span class="keyword">=== </span><span class="default">10 </span><span class="keyword">|| </span><span class="default">$encodedWord
<br />        </span><span class="keyword">) {    </span><span class="comment">// add character
<br />            </span><span class="default">$output </span><span class="keyword">.= </span><span class="default">$chr</span><span class="keyword">;
<br />            </span><span class="default">$charsLeft</span><span class="keyword">-=</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$chr</span><span class="keyword">);
<br />        } elseif (isset(</span><span class="default">$nextOrd</span><span class="keyword">)) {    </span><span class="comment">// another line needed
<br />            </span><span class="default">$output </span><span class="keyword">.= </span><span class="default">$encodedWord
<br />                </span><span class="keyword">? </span><span class="default">$wordEnd </span><span class="keyword">. </span><span class="default">$endl </span><span class="keyword">. </span><span class="string">"\t" </span><span class="keyword">. </span><span class="default">$wordStart </span><span class="keyword">. </span><span class="default">$chr
<br />                </span><span class="keyword">: </span><span class="string">'=' </span><span class="keyword">. </span><span class="default">$endl </span><span class="keyword">. </span><span class="default">$chr</span><span class="keyword">;
<br />            </span><span class="default">$charsLeft </span><span class="keyword">= </span><span class="default">$lineLength </span><span class="keyword">- </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$chr</span><span class="keyword">);
<br />        }
<br />        
<br />        </span><span class="default">$chr </span><span class="keyword">= </span><span class="default">$nextChr</span><span class="keyword">;
<br />        </span><span class="default">$ord </span><span class="keyword">= </span><span class="default">$nextOrd</span><span class="keyword">;
<br />    }
<br />    
<br />    return </span><span class="default">$output </span><span class="keyword">. (</span><span class="default">$encodedWord </span><span class="keyword">? </span><span class="default">$wordEnd </span><span class="keyword">: </span><span class="string">''</span><span class="keyword">);
<br />}
<br />
<br />echo </span><span class="default">quoted_printable_encode</span><span class="keyword">(</span><span class="default">$text</span><span class="comment">/*, true*/</span><span class="keyword">);</span></span></code></div>
  </div>
 </div>
  <div class="note" id="78023">  <div class="votes">
    <div id="Vu78023">
    <a href="/manual/vote-note.php?id=78023&amp;page=function.quoted-printable-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78023">
    <a href="/manual/vote-note.php?id=78023&amp;page=function.quoted-printable-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78023" title="50% like this...">
    0
    </div>
  </div>
  <a href="#78023" class="name">
  <strong class="user"><em>ludwig at gramberg-webdesign dot de</em></strong></a><a class="genanchor" href="#78023"> &para;</a><div class="date" title="2007-09-24 12:13"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom78023">
<div class="phpcode"><code><span class="html">my approach for quoted printable encode using the stream converting abilities<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * @param string $str<br /> * @return string<br /> * */<br /></span><span class="keyword">function </span><span class="default">quoted_printable_encode</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">) {<br />    </span><span class="default">$fp </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">'php://temp'</span><span class="keyword">, </span><span class="string">'w+'</span><span class="keyword">);<br />    </span><span class="default">stream_filter_append</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="string">'convert.quoted-printable-encode'</span><span class="keyword">);<br />    </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">);    <br />    </span><span class="default">fseek</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br />    </span><span class="default">$result </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />    while(!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">))<br />        </span><span class="default">$result </span><span class="keyword">.= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">1024</span><span class="keyword">);<br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);<br />    return </span><span class="default">$result</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="76645">  <div class="votes">
    <div id="Vu76645">
    <a href="/manual/vote-note.php?id=76645&amp;page=function.quoted-printable-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76645">
    <a href="/manual/vote-note.php?id=76645&amp;page=function.quoted-printable-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76645" title="50% like this...">
    0
    </div>
  </div>
  <a href="#76645" class="name">
  <strong class="user"><em>roelof</em></strong></a><a class="genanchor" href="#76645"> &para;</a><div class="date" title="2007-07-24 07:06"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76645">
<div class="phpcode"><code><span class="html">I modified the below version of legolas558 at users dot sausafe dot net and added a wrapping option.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> *    Codeer een String naar zogenaamde 'quoted printable'. Dit type van coderen wordt<br /> *    gebruikt om de content van 8 bit e-mail berichten als 7 bits te versturen.<br /> *<br /> *    @access public<br /> *    @param string    $str    De String die we coderen<br /> *    @param bool      $wrap   Voeg linebreaks toe na 74 tekens?<br /> *    @return string<br /> */<br /><br /></span><span class="keyword">function </span><span class="default">quoted_printable_encode</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$wrap</span><span class="keyword">=</span><span class="default">true</span><span class="keyword">)<br />{<br />    </span><span class="default">$return </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />    </span><span class="default">$iL </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">);<br />    for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$iL</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)<br />    {<br />        </span><span class="default">$char </span><span class="keyword">= </span><span class="default">$str</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];<br />        if(</span><span class="default">ctype_print</span><span class="keyword">(</span><span class="default">$char</span><span class="keyword">) &amp;&amp; !</span><span class="default">ctype_punct</span><span class="keyword">(</span><span class="default">$char</span><span class="keyword">)) </span><span class="default">$return </span><span class="keyword">.= </span><span class="default">$char</span><span class="keyword">;<br />        else </span><span class="default">$return </span><span class="keyword">.= </span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">'=%02X'</span><span class="keyword">, </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$char</span><span class="keyword">));<br />    }<br />    return (</span><span class="default">$wrap </span><span class="keyword">=== </span><span class="default">true</span><span class="keyword">)<br />        ? </span><span class="default">wordwrap</span><span class="keyword">(</span><span class="default">$return</span><span class="keyword">, </span><span class="default">74</span><span class="keyword">, </span><span class="string">" =\n"</span><span class="keyword">)<br />        : </span><span class="default">$return</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="73402">  <div class="votes">
    <div id="Vu73402">
    <a href="/manual/vote-note.php?id=73402&amp;page=function.quoted-printable-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73402">
    <a href="/manual/vote-note.php?id=73402&amp;page=function.quoted-printable-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73402" title="50% like this...">
    0
    </div>
  </div>
  <a href="#73402" class="name">
  <strong class="user"><em>legolas558 at users dot sausafe dot net</em></strong></a><a class="genanchor" href="#73402"> &para;</a><div class="date" title="2007-02-21 11:09"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73402">
<div class="phpcode"><code><span class="html">As soletan at toxa dot de reported, that function is very bad and does not provide valid enquoted printable strings. While using it I saw spam agents marking the emails as QP_EXCESS and sometimes the email client did not recognize the header at all; I really lost time :(. This is the new version (we use it in the Drake CMS core) that works seamlessly:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">//L: note $encoding that is uppercase<br />//L: also your PHP installation must have ctype_alpha, otherwise write it yourself<br /></span><span class="keyword">function </span><span class="default">quoted_printable_encode</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$encoding</span><span class="keyword">=</span><span class="string">'UTF-8'</span><span class="keyword">) {<br /></span><span class="comment">// use this function with headers, not with the email body as it misses word wrapping<br />       </span><span class="default">$len </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">);<br />       </span><span class="default">$result </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />       </span><span class="default">$enc </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />       for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$len</span><span class="keyword">;++</span><span class="default">$i</span><span class="keyword">) {<br />        </span><span class="default">$c </span><span class="keyword">= </span><span class="default">$string</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];<br />        if (</span><span class="default">ctype_alpha</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">))<br />            </span><span class="default">$result</span><span class="keyword">.=</span><span class="default">$c</span><span class="keyword">;<br />        else if (</span><span class="default">$c</span><span class="keyword">==</span><span class="string">' '</span><span class="keyword">) {<br />            </span><span class="default">$result</span><span class="keyword">.=</span><span class="string">'_'</span><span class="keyword">;<br />            </span><span class="default">$enc </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />        } else {<br />            </span><span class="default">$result</span><span class="keyword">.=</span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">"=%02X"</span><span class="keyword">, </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">));<br />            </span><span class="default">$enc </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />        }<br />       }<br />       </span><span class="comment">//L: so spam agents won't mark your email with QP_EXCESS<br />       </span><span class="keyword">if (!</span><span class="default">$enc</span><span class="keyword">) return </span><span class="default">$string</span><span class="keyword">;<br />       return </span><span class="string">'=?'</span><span class="keyword">.</span><span class="default">$encoding</span><span class="keyword">.</span><span class="string">'?q?'</span><span class="keyword">.</span><span class="default">$result</span><span class="keyword">.</span><span class="string">'?='</span><span class="keyword">;<br />}<br /><br /></span><span class="default">I hope it helps </span><span class="keyword">;)<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="50141">  <div class="votes">
    <div id="Vu50141">
    <a href="/manual/vote-note.php?id=50141&amp;page=function.quoted-printable-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd50141">
    <a href="/manual/vote-note.php?id=50141&amp;page=function.quoted-printable-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V50141" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#50141" class="name">
  <strong class="user"><em>dmitry at koterov dot ru</em></strong></a><a class="genanchor" href="#50141"> &para;</a><div class="date" title="2005-02-19 05:26"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom50141">
<div class="phpcode"><code><span class="html">Previous comment has a bug: encoding of short test does not work because of incorrect usage of preg_match_all(). Have somebody read it at all? :-)<br /><br />Correct version (seems), with additional imap_8bit() function emulation:<br /><br />if (!function_exists('imap_8bit')) {<br /> function imap_8bit($text) {<br />   return quoted_printable_encode($text);<br /> }<br />}<br /><br />function quoted_printable_encode_character ( $matches ) {<br />   $character = $matches[0];<br />   return sprintf ( '=%02x', ord ( $character ) );<br />}<br /><br />// based on <a href="http://www.freesoft.org/CIE/RFC/1521/6.htm" rel="nofollow" target="_blank">http://www.freesoft.org/CIE/RFC/1521/6.htm</a><br />function quoted_printable_encode ( $string ) {<br />   // rule #2, #3 (leaves space and tab characters in tact)<br />   $string = preg_replace_callback (<br />     '/[^\x21-\x3C\x3E-\x7E\x09\x20]/',<br />     'quoted_printable_encode_character',<br />     $string<br />   );<br />   $newline = "=\r\n"; // '=' + CRLF (rule #4)<br />   // make sure the splitting of lines does not interfere with escaped characters<br />   // (chunk_split fails here)<br />   $string = preg_replace ( '/(.{73}[^=]{0,3})/', '$1'.$newline, $string);<br />   return $string;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="125044">  <div class="votes">
    <div id="Vu125044">
    <a href="/manual/vote-note.php?id=125044&amp;page=function.quoted-printable-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125044">
    <a href="/manual/vote-note.php?id=125044&amp;page=function.quoted-printable-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125044" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#125044" class="name">
  <strong class="user"><em>naitsirch at e dot mail dot de</em></strong></a><a class="genanchor" href="#125044"> &para;</a><div class="date" title="2020-05-25 02:31"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125044">
<div class="phpcode"><code><span class="html">If there is a NULL byte in the string that is passed, quoted_printable_decode will crop everything after the NULL byte and the NULL byte itself.<br /><br /><span class="default">&lt;?php<br />$result </span><span class="keyword">= </span><span class="default">quoted_printable_decode</span><span class="keyword">(</span><span class="string">"This is a\0 test."</span><span class="keyword">);<br /></span><span class="comment">// $result === 'This is a'<br /></span><span class="default">?&gt;<br /></span><br />This is not a bug, but the intended behaviour and defined by RFC 2045 (see <a href="https://www.ietf.org/rfc/rfc2045.txt" rel="nofollow" target="_blank">https://www.ietf.org/rfc/rfc2045.txt</a>) in paragraph 2.7 and 2.8.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.quoted-printable-decode&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.quoted-printable-decode.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.strings.php">String Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.addcslashes.php" title="addcslashes">addcslashes</a>
                        </li>
                                                <li class="">
                            <a href="function.addslashes.php" title="addslashes">addslashes</a>
                        </li>
                                                <li class="">
                            <a href="function.bin2hex.php" title="bin2hex">bin2hex</a>
                        </li>
                                                <li class="">
                            <a href="function.chop.php" title="chop">chop</a>
                        </li>
                                                <li class="">
                            <a href="function.chr.php" title="chr">chr</a>
                        </li>
                                                <li class="">
                            <a href="function.chunk-split.php" title="chunk_&#8203;split">chunk_&#8203;split</a>
                        </li>
                                                <li class="">
                            <a href="function.convert-uudecode.php" title="convert_&#8203;uudecode">convert_&#8203;uudecode</a>
                        </li>
                                                <li class="">
                            <a href="function.convert-uuencode.php" title="convert_&#8203;uuencode">convert_&#8203;uuencode</a>
                        </li>
                                                <li class="">
                            <a href="function.count-chars.php" title="count_&#8203;chars">count_&#8203;chars</a>
                        </li>
                                                <li class="">
                            <a href="function.crc32.php" title="crc32">crc32</a>
                        </li>
                                                <li class="">
                            <a href="function.crypt.php" title="crypt">crypt</a>
                        </li>
                                                <li class="">
                            <a href="function.echo.php" title="echo">echo</a>
                        </li>
                                                <li class="">
                            <a href="function.explode.php" title="explode">explode</a>
                        </li>
                                                <li class="">
                            <a href="function.fprintf.php" title="fprintf">fprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.get-html-translation-table.php" title="get_&#8203;html_&#8203;translation_&#8203;table">get_&#8203;html_&#8203;translation_&#8203;table</a>
                        </li>
                                                <li class="">
                            <a href="function.hebrev.php" title="hebrev">hebrev</a>
                        </li>
                                                <li class="">
                            <a href="function.hex2bin.php" title="hex2bin">hex2bin</a>
                        </li>
                                                <li class="">
                            <a href="function.html-entity-decode.php" title="html_&#8203;entity_&#8203;decode">html_&#8203;entity_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.htmlentities.php" title="htmlentities">htmlentities</a>
                        </li>
                                                <li class="">
                            <a href="function.htmlspecialchars.php" title="htmlspecialchars">htmlspecialchars</a>
                        </li>
                                                <li class="">
                            <a href="function.htmlspecialchars-decode.php" title="htmlspecialchars_&#8203;decode">htmlspecialchars_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.implode.php" title="implode">implode</a>
                        </li>
                                                <li class="">
                            <a href="function.join.php" title="join">join</a>
                        </li>
                                                <li class="">
                            <a href="function.lcfirst.php" title="lcfirst">lcfirst</a>
                        </li>
                                                <li class="">
                            <a href="function.levenshtein.php" title="levenshtein">levenshtein</a>
                        </li>
                                                <li class="">
                            <a href="function.localeconv.php" title="localeconv">localeconv</a>
                        </li>
                                                <li class="">
                            <a href="function.ltrim.php" title="ltrim">ltrim</a>
                        </li>
                                                <li class="">
                            <a href="function.md5.php" title="md5">md5</a>
                        </li>
                                                <li class="">
                            <a href="function.md5-file.php" title="md5_&#8203;file">md5_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.metaphone.php" title="metaphone">metaphone</a>
                        </li>
                                                <li class="">
                            <a href="function.nl-langinfo.php" title="nl_&#8203;langinfo">nl_&#8203;langinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.nl2br.php" title="nl2br">nl2br</a>
                        </li>
                                                <li class="">
                            <a href="function.number-format.php" title="number_&#8203;format">number_&#8203;format</a>
                        </li>
                                                <li class="">
                            <a href="function.ord.php" title="ord">ord</a>
                        </li>
                                                <li class="">
                            <a href="function.parse-str.php" title="parse_&#8203;str">parse_&#8203;str</a>
                        </li>
                                                <li class="">
                            <a href="function.print.php" title="print">print</a>
                        </li>
                                                <li class="">
                            <a href="function.printf.php" title="printf">printf</a>
                        </li>
                                                <li class="current">
                            <a href="function.quoted-printable-decode.php" title="quoted_&#8203;printable_&#8203;decode">quoted_&#8203;printable_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.quoted-printable-encode.php" title="quoted_&#8203;printable_&#8203;encode">quoted_&#8203;printable_&#8203;encode</a>
                        </li>
                                                <li class="">
                            <a href="function.quotemeta.php" title="quotemeta">quotemeta</a>
                        </li>
                                                <li class="">
                            <a href="function.rtrim.php" title="rtrim">rtrim</a>
                        </li>
                                                <li class="">
                            <a href="function.setlocale.php" title="setlocale">setlocale</a>
                        </li>
                                                <li class="">
                            <a href="function.sha1.php" title="sha1">sha1</a>
                        </li>
                                                <li class="">
                            <a href="function.sha1-file.php" title="sha1_&#8203;file">sha1_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.similar-text.php" title="similar_&#8203;text">similar_&#8203;text</a>
                        </li>
                                                <li class="">
                            <a href="function.soundex.php" title="soundex">soundex</a>
                        </li>
                                                <li class="">
                            <a href="function.sprintf.php" title="sprintf">sprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.sscanf.php" title="sscanf">sscanf</a>
                        </li>
                                                <li class="">
                            <a href="function.str-contains.php" title="str_&#8203;contains">str_&#8203;contains</a>
                        </li>
                                                <li class="">
                            <a href="function.str-decrement.php" title="str_&#8203;decrement">str_&#8203;decrement</a>
                        </li>
                                                <li class="">
                            <a href="function.str-ends-with.php" title="str_&#8203;ends_&#8203;with">str_&#8203;ends_&#8203;with</a>
                        </li>
                                                <li class="">
                            <a href="function.str-getcsv.php" title="str_&#8203;getcsv">str_&#8203;getcsv</a>
                        </li>
                                                <li class="">
                            <a href="function.str-increment.php" title="str_&#8203;increment">str_&#8203;increment</a>
                        </li>
                                                <li class="">
                            <a href="function.str-ireplace.php" title="str_&#8203;ireplace">str_&#8203;ireplace</a>
                        </li>
                                                <li class="">
                            <a href="function.str-pad.php" title="str_&#8203;pad">str_&#8203;pad</a>
                        </li>
                                                <li class="">
                            <a href="function.str-repeat.php" title="str_&#8203;repeat">str_&#8203;repeat</a>
                        </li>
                                                <li class="">
                            <a href="function.str-replace.php" title="str_&#8203;replace">str_&#8203;replace</a>
                        </li>
                                                <li class="">
                            <a href="function.str-rot13.php" title="str_&#8203;rot13">str_&#8203;rot13</a>
                        </li>
                                                <li class="">
                            <a href="function.str-shuffle.php" title="str_&#8203;shuffle">str_&#8203;shuffle</a>
                        </li>
                                                <li class="">
                            <a href="function.str-split.php" title="str_&#8203;split">str_&#8203;split</a>
                        </li>
                                                <li class="">
                            <a href="function.str-starts-with.php" title="str_&#8203;starts_&#8203;with">str_&#8203;starts_&#8203;with</a>
                        </li>
                                                <li class="">
                            <a href="function.str-word-count.php" title="str_&#8203;word_&#8203;count">str_&#8203;word_&#8203;count</a>
                        </li>
                                                <li class="">
                            <a href="function.strcasecmp.php" title="strcasecmp">strcasecmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strchr.php" title="strchr">strchr</a>
                        </li>
                                                <li class="">
                            <a href="function.strcmp.php" title="strcmp">strcmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strcoll.php" title="strcoll">strcoll</a>
                        </li>
                                                <li class="">
                            <a href="function.strcspn.php" title="strcspn">strcspn</a>
                        </li>
                                                <li class="">
                            <a href="function.strip-tags.php" title="strip_&#8203;tags">strip_&#8203;tags</a>
                        </li>
                                                <li class="">
                            <a href="function.stripcslashes.php" title="stripcslashes">stripcslashes</a>
                        </li>
                                                <li class="">
                            <a href="function.stripos.php" title="stripos">stripos</a>
                        </li>
                                                <li class="">
                            <a href="function.stripslashes.php" title="stripslashes">stripslashes</a>
                        </li>
                                                <li class="">
                            <a href="function.stristr.php" title="stristr">stristr</a>
                        </li>
                                                <li class="">
                            <a href="function.strlen.php" title="strlen">strlen</a>
                        </li>
                                                <li class="">
                            <a href="function.strnatcasecmp.php" title="strnatcasecmp">strnatcasecmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strnatcmp.php" title="strnatcmp">strnatcmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strncasecmp.php" title="strncasecmp">strncasecmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strncmp.php" title="strncmp">strncmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strpbrk.php" title="strpbrk">strpbrk</a>
                        </li>
                                                <li class="">
                            <a href="function.strpos.php" title="strpos">strpos</a>
                        </li>
                                                <li class="">
                            <a href="function.strrchr.php" title="strrchr">strrchr</a>
                        </li>
                                                <li class="">
                            <a href="function.strrev.php" title="strrev">strrev</a>
                        </li>
                                                <li class="">
                            <a href="function.strripos.php" title="strripos">strripos</a>
                        </li>
                                                <li class="">
                            <a href="function.strrpos.php" title="strrpos">strrpos</a>
                        </li>
                                                <li class="">
                            <a href="function.strspn.php" title="strspn">strspn</a>
                        </li>
                                                <li class="">
                            <a href="function.strstr.php" title="strstr">strstr</a>
                        </li>
                                                <li class="">
                            <a href="function.strtok.php" title="strtok">strtok</a>
                        </li>
                                                <li class="">
                            <a href="function.strtolower.php" title="strtolower">strtolower</a>
                        </li>
                                                <li class="">
                            <a href="function.strtoupper.php" title="strtoupper">strtoupper</a>
                        </li>
                                                <li class="">
                            <a href="function.strtr.php" title="strtr">strtr</a>
                        </li>
                                                <li class="">
                            <a href="function.substr.php" title="substr">substr</a>
                        </li>
                                                <li class="">
                            <a href="function.substr-compare.php" title="substr_&#8203;compare">substr_&#8203;compare</a>
                        </li>
                                                <li class="">
                            <a href="function.substr-count.php" title="substr_&#8203;count">substr_&#8203;count</a>
                        </li>
                                                <li class="">
                            <a href="function.substr-replace.php" title="substr_&#8203;replace">substr_&#8203;replace</a>
                        </li>
                                                <li class="">
                            <a href="function.trim.php" title="trim">trim</a>
                        </li>
                                                <li class="">
                            <a href="function.ucfirst.php" title="ucfirst">ucfirst</a>
                        </li>
                                                <li class="">
                            <a href="function.ucwords.php" title="ucwords">ucwords</a>
                        </li>
                                                <li class="">
                            <a href="function.vfprintf.php" title="vfprintf">vfprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.vprintf.php" title="vprintf">vprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.vsprintf.php" title="vsprintf">vsprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.wordwrap.php" title="wordwrap">wordwrap</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="function.convert-cyr-string.php" title="convert_&#8203;cyr_&#8203;string">convert_&#8203;cyr_&#8203;string</a>
                    </li>
                                    <li class="">
                        <a href="function.hebrevc.php" title="hebrevc">hebrevc</a>
                    </li>
                                    <li class="">
                        <a href="function.money-format.php" title="money_&#8203;format">money_&#8203;format</a>
                    </li>
                                    <li class="">
                        <a href="function.utf8-decode.php" title="utf8_&#8203;decode">utf8_&#8203;decode</a>
                    </li>
                                    <li class="">
                        <a href="function.utf8-encode.php" title="utf8_&#8203;encode">utf8_&#8203;encode</a>
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
