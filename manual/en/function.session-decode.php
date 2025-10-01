<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: session_decode - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.session-decode.php">
 <link rel="shorturl" href="https://www.php.net/session-decode">
 <link rel="alternate" href="https://www.php.net/session-decode" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.session.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.session-create-id.php">
 <link rel="next" href="https://www.php.net/manual/en/function.session-destroy.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.session-decode.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.session-decode.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.session-decode.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.session-decode.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.session-decode.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.session-decode.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.session-decode.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.session-decode.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.session-decode.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.session-decode.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.session-decode.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Decodes session data from a session encoded string" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: session_decode - Manual" />
<meta name="twitter:description" content="Decodes session data from a session encoded string" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: session_decode - Manual" />
<meta itemprop="description" content="Decodes session data from a session encoded string" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Decodes session data from a session encoded string" />

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
        <a href="function.session-destroy.php">
          session_destroy &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.session-create-id.php">
          &laquo; session_create_id        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.session.php'>Session Extensions</a></li>      <li><a href='book.session.php'>Sessions</a></li>      <li><a href='ref.session.php'>Session Functions</a></li>      </ul>
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
            <option value='en/function.session-decode.php' selected="selected">English</option>
            <option value='de/function.session-decode.php'>German</option>
            <option value='es/function.session-decode.php'>Spanish</option>
            <option value='fr/function.session-decode.php'>French</option>
            <option value='it/function.session-decode.php'>Italian</option>
            <option value='ja/function.session-decode.php'>Japanese</option>
            <option value='pt_BR/function.session-decode.php'>Brazilian Portuguese</option>
            <option value='ru/function.session-decode.php'>Russian</option>
            <option value='tr/function.session-decode.php'>Turkish</option>
            <option value='uk/function.session-decode.php'>Ukrainian</option>
            <option value='zh/function.session-decode.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.session-decode" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">session_decode</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">session_decode</span> &mdash; <span class="dc-title">Decodes session data from a session encoded string</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.session-decode-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>session_decode</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$data</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>session_decode()</strong></span> decodes the serialized session data provided in
   <code class="parameter">$data</code>, and populates the $_SESSION superglobal
   with the result.
  </p>
  <p class="para">
   By default, the unserialization method used is internal to PHP, and is not the same as <span class="function"><a href="function.unserialize.php" class="function">unserialize()</a></span>.
   The serialization method can be set using <a href="session.configuration.php#ini.session.serialize-handler" class="link">session.serialize_handler</a>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.session-decode-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">data</code></dt>
     <dd>
      <p class="para">
       The encoded data to be stored.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.session-decode-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.session-decode-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.session-encode.php" class="function" rel="rdfs-seeAlso">session_encode()</a> - Encodes the current session data as a session encoded string</span></li>
    <li><a href="session.configuration.php#ini.session.serialize-handler" class="link">session.serialize_handler</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/session/functions/session-decode.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.session-decode%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.session-decode&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.session-decode.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">15 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="108037">  <div class="votes">
    <div id="Vu108037">
    <a href="/manual/vote-note.php?id=108037&amp;page=function.session-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108037">
    <a href="/manual/vote-note.php?id=108037&amp;page=function.session-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108037" title="74% like this...">
    49
    </div>
  </div>
  <a href="#108037" class="name">
  <strong class="user"><em>Frits dot vanCampen at moxio dot com</em></strong></a><a class="genanchor" href="#108037"> &para;</a><div class="date" title="2012-03-23 05:24"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108037">
<div class="phpcode"><code><span class="html">I noticed that the posted solutions for manually decoding sessions are not perfect, so I've contributed a more robust solution.<br /><br />The preg_match solution can never work. It's not so hard to find a case that might break unserialization.<br />In the case of jason-joeymail is breaks on:<br /><br /><span class="default">&lt;?php<br />$_SESSION</span><span class="keyword">[</span><span class="string">"test"</span><span class="keyword">] = </span><span class="string">";oops|"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />Below you can find my solution. It doesn't use a regular expression but rather the reversibility of the serialize operation and the 'feature' that serialize ignores all further input when it thinks it's done. It's by no means a beautiful or particularly fast solution but it is a more robust solution.<br />I've added a deserializer for "php" and "php_binary". It should be trivial to add one for "wddx".<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Session </span><span class="keyword">{<br />    public static function </span><span class="default">unserialize</span><span class="keyword">(</span><span class="default">$session_data</span><span class="keyword">) {<br />        </span><span class="default">$method </span><span class="keyword">= </span><span class="default">ini_get</span><span class="keyword">(</span><span class="string">"session.serialize_handler"</span><span class="keyword">);<br />        switch (</span><span class="default">$method</span><span class="keyword">) {<br />            case </span><span class="string">"php"</span><span class="keyword">:<br />                return </span><span class="default">self</span><span class="keyword">::</span><span class="default">unserialize_php</span><span class="keyword">(</span><span class="default">$session_data</span><span class="keyword">);<br />                break;<br />            case </span><span class="string">"php_binary"</span><span class="keyword">:<br />                return </span><span class="default">self</span><span class="keyword">::</span><span class="default">unserialize_phpbinary</span><span class="keyword">(</span><span class="default">$session_data</span><span class="keyword">);<br />                break;<br />            default:<br />                throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"Unsupported session.serialize_handler: " </span><span class="keyword">. </span><span class="default">$method </span><span class="keyword">. </span><span class="string">". Supported: php, php_binary"</span><span class="keyword">);<br />        }<br />    }<br /><br />    private static function </span><span class="default">unserialize_php</span><span class="keyword">(</span><span class="default">$session_data</span><span class="keyword">) {<br />        </span><span class="default">$return_data </span><span class="keyword">= array();<br />        </span><span class="default">$offset </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        while (</span><span class="default">$offset </span><span class="keyword">&lt; </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$session_data</span><span class="keyword">)) {<br />            if (!</span><span class="default">strstr</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$session_data</span><span class="keyword">, </span><span class="default">$offset</span><span class="keyword">), </span><span class="string">"|"</span><span class="keyword">)) {<br />                throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"invalid data, remaining: " </span><span class="keyword">. </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$session_data</span><span class="keyword">, </span><span class="default">$offset</span><span class="keyword">));<br />            }<br />            </span><span class="default">$pos </span><span class="keyword">= </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$session_data</span><span class="keyword">, </span><span class="string">"|"</span><span class="keyword">, </span><span class="default">$offset</span><span class="keyword">);<br />            </span><span class="default">$num </span><span class="keyword">= </span><span class="default">$pos </span><span class="keyword">- </span><span class="default">$offset</span><span class="keyword">;<br />            </span><span class="default">$varname </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$session_data</span><span class="keyword">, </span><span class="default">$offset</span><span class="keyword">, </span><span class="default">$num</span><span class="keyword">);<br />            </span><span class="default">$offset </span><span class="keyword">+= </span><span class="default">$num </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">;<br />            </span><span class="default">$data </span><span class="keyword">= </span><span class="default">unserialize</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$session_data</span><span class="keyword">, </span><span class="default">$offset</span><span class="keyword">));<br />            </span><span class="default">$return_data</span><span class="keyword">[</span><span class="default">$varname</span><span class="keyword">] = </span><span class="default">$data</span><span class="keyword">;<br />            </span><span class="default">$offset </span><span class="keyword">+= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">serialize</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">));<br />        }<br />        return </span><span class="default">$return_data</span><span class="keyword">;<br />    }<br /><br />    private static function </span><span class="default">unserialize_phpbinary</span><span class="keyword">(</span><span class="default">$session_data</span><span class="keyword">) {<br />        </span><span class="default">$return_data </span><span class="keyword">= array();<br />        </span><span class="default">$offset </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        while (</span><span class="default">$offset </span><span class="keyword">&lt; </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$session_data</span><span class="keyword">)) {<br />            </span><span class="default">$num </span><span class="keyword">= </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$session_data</span><span class="keyword">[</span><span class="default">$offset</span><span class="keyword">]);<br />            </span><span class="default">$offset </span><span class="keyword">+= </span><span class="default">1</span><span class="keyword">;<br />            </span><span class="default">$varname </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$session_data</span><span class="keyword">, </span><span class="default">$offset</span><span class="keyword">, </span><span class="default">$num</span><span class="keyword">);<br />            </span><span class="default">$offset </span><span class="keyword">+= </span><span class="default">$num</span><span class="keyword">;<br />            </span><span class="default">$data </span><span class="keyword">= </span><span class="default">unserialize</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$session_data</span><span class="keyword">, </span><span class="default">$offset</span><span class="keyword">));<br />            </span><span class="default">$return_data</span><span class="keyword">[</span><span class="default">$varname</span><span class="keyword">] = </span><span class="default">$data</span><span class="keyword">;<br />            </span><span class="default">$offset </span><span class="keyword">+= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">serialize</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">));<br />        }<br />        return </span><span class="default">$return_data</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">?&gt;<br /></span><br />Usage:<br /><br /><span class="default">&lt;?php<br />Session</span><span class="keyword">::</span><span class="default">unserialize</span><span class="keyword">(</span><span class="default">session_encode</span><span class="keyword">());<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="35147">  <div class="votes">
    <div id="Vu35147">
    <a href="/manual/vote-note.php?id=35147&amp;page=function.session-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd35147">
    <a href="/manual/vote-note.php?id=35147&amp;page=function.session-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V35147" title="83% like this...">
    4
    </div>
  </div>
  <a href="#35147" class="name">
  <strong class="user"><em>petej*shaman_ca</em></strong></a><a class="genanchor" href="#35147"> &para;</a><div class="date" title="2003-08-21 01:44"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom35147">
<div class="phpcode"><code><span class="html">Seems like there was a change in the behavior of this function somewhere between 4.1.2 and 4.3.3.  In 4.1.2 session_decode() didn't care whether the session was started, and would just decode the string into the _SESSION array.  In my 4.3.3 install, session_decode() wouldn't work unless I explicitly started the session with session_start().</span></code></div>
  </div>
 </div>
  <div class="note" id="113523">  <div class="votes">
    <div id="Vu113523">
    <a href="/manual/vote-note.php?id=113523&amp;page=function.session-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113523">
    <a href="/manual/vote-note.php?id=113523&amp;page=function.session-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113523" title="64% like this...">
    9
    </div>
  </div>
  <a href="#113523" class="name">
  <strong class="user"><em>frank at interactinet dot com</em></strong></a><a class="genanchor" href="#113523"> &para;</a><div class="date" title="2013-10-24 03:58"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113523">
<div class="phpcode"><code><span class="html">I found this to be the simplest solution:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// if session is not started<br /></span><span class="default">session_start</span><span class="keyword">();<br /><br /></span><span class="comment">// store our current session<br /></span><span class="default">$my_sess </span><span class="keyword">= </span><span class="default">$_SESSION</span><span class="keyword">;<br /><br /></span><span class="comment">// decode $data (the encoded session data, either from a file or database). Remember, decoded data is put directly into $_SESSION<br /></span><span class="default">session_decode</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br /></span><span class="default">$data </span><span class="keyword">= </span><span class="default">$_SESSION</span><span class="keyword">;<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br /><br /></span><span class="comment">// restore our own session<br /></span><span class="default">$_SESSION </span><span class="keyword">= </span><span class="default">$my_sess</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="69111">  <div class="votes">
    <div id="Vu69111">
    <a href="/manual/vote-note.php?id=69111&amp;page=function.session-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69111">
    <a href="/manual/vote-note.php?id=69111&amp;page=function.session-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69111" title="64% like this...">
    4
    </div>
  </div>
  <a href="#69111" class="name">
  <strong class="user"><em>leon dot pegg at gmail dot com</em></strong></a><a class="genanchor" href="#69111"> &para;</a><div class="date" title="2006-08-23 08:14"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69111">
<div class="phpcode"><code><span class="html">i have found this to be a better way to restore session data while keeping your current session.<br /><br />function decode_session($session_string){<br />    $current_session = session_encode();<br />    foreach ($_SESSION as $key =&gt; $value){<br />        unset($_SESSION[$key]);<br />    }<br />    session_decode($session_string);<br />    $restored_session = $_SESSION;<br />    foreach ($_SESSION as $key =&gt; $value){<br />        unset($_SESSION[$key]);<br />    }<br />    session_decode($current_session);<br />    return $restored_session;<br />}<br /><br />enjoy</span></code></div>
  </div>
 </div>
  <div class="note" id="79244">  <div class="votes">
    <div id="Vu79244">
    <a href="/manual/vote-note.php?id=79244&amp;page=function.session-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79244">
    <a href="/manual/vote-note.php?id=79244&amp;page=function.session-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79244" title="60% like this...">
    2
    </div>
  </div>
  <a href="#79244" class="name">
  <strong class="user"><em>deminy at deminy dot net</em></strong></a><a class="genanchor" href="#79244"> &para;</a><div class="date" title="2007-11-16 01:24"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79244">
<div class="phpcode"><code><span class="html">1. Reply to ac's post:<br /><br />As I mentioned at <a href="http://us.php.net/manual/en/function.unserialize.php#76977" rel="nofollow" target="_blank">http://us.php.net/manual/en/function.unserialize.php#76977</a> , the regular expression used to unserialize a PHP session data won't work if the session data contains string variable which contains character '|'.<br /><br />Here is a simple example I just come up with to show when the function unserializesession() won't work.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">unserializesession</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">) {<br />    </span><span class="default">$vars</span><span class="keyword">=</span><span class="default">preg_split</span><span class="keyword">(</span><span class="string">'/([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff^|]*)\|/'</span><span class="keyword">,<br />              </span><span class="default">$data</span><span class="keyword">,-</span><span class="default">1</span><span class="keyword">,</span><span class="default">PREG_SPLIT_NO_EMPTY </span><span class="keyword">| </span><span class="default">PREG_SPLIT_DELIM_CAPTURE</span><span class="keyword">);<br />    for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$vars</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]; </span><span class="default">$i</span><span class="keyword">++) </span><span class="default">$result</span><span class="keyword">[</span><span class="default">$vars</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">++]]=</span><span class="default">unserialize</span><span class="keyword">(</span><span class="default">$vars</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]);<br />    return </span><span class="default">$result</span><span class="keyword">;<br />}<br /><br /></span><span class="default">session_start</span><span class="keyword">();<br /><br /></span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'var'</span><span class="keyword">] = </span><span class="string">'a|b'</span><span class="keyword">; <br /></span><span class="default">$str </span><span class="keyword">= </span><span class="default">session_encode</span><span class="keyword">();<br /></span><span class="default">$arr </span><span class="keyword">= </span><span class="default">unserializesession</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">);<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$_SESSION</span><span class="keyword">);<br />echo </span><span class="string">"&lt;br /&gt;\n"</span><span class="keyword">;<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />2. Reply to bmorel's post:<br /><br />Your function session_real_decode() is very nice to decode session data without involving with session functions. It works in most cases, but when dealing with reference variables, there is another case which should also be handled:<br /><br />    <span class="default">&lt;?php </span><span class="keyword">case </span><span class="string">'r'</span><span class="keyword">: </span><span class="comment">/* reference  */ // R in lowercase </span><span class="default">?&gt;<br /></span><br />I found this bug on PHP 5.1.6 several months ago, but don't know if it exsits in other version of PHP or not. Also, I am not sure if similiar bugs exist when handling other data types.<br /><br />So here is my suggestion to revise the function, <br />2.1. <br />    change the switch statement from<br />    <span class="default">&lt;?php </span><span class="keyword">switch (</span><span class="default">$str</span><span class="keyword">[</span><span class="default">$q</span><span class="keyword">]) { </span><span class="default">?&gt;<br /></span>    to<br />    <span class="default">&lt;?php </span><span class="keyword">switch (</span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">[</span><span class="default">$q</span><span class="keyword">])) { </span><span class="default">?&gt;<br /></span>2.2. <br />    In all case statements, use lowercase characters only for character comparison. For example,<br />    <span class="default">&lt;?php </span><span class="keyword">case </span><span class="string">'R'</span><span class="keyword">: </span><span class="comment">/* reference  */ </span><span class="default">?&gt;<br /></span>    should be be written as <br />    <span class="default">&lt;?php </span><span class="keyword">case </span><span class="string">'r'</span><span class="keyword">: </span><span class="comment">/* reference  */ </span><span class="default">?&gt;<br /></span><br />(I don't want to put long code here, so just leave pieces of code to save spaces)</span></code></div>
  </div>
 </div>
  <div class="note" id="41187">  <div class="votes">
    <div id="Vu41187">
    <a href="/manual/vote-note.php?id=41187&amp;page=function.session-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd41187">
    <a href="/manual/vote-note.php?id=41187&amp;page=function.session-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V41187" title="57% like this...">
    2
    </div>
  </div>
  <a href="#41187" class="name">
  <strong class="user"><em>forum at orthanc dot co dot nz</em></strong></a><a class="genanchor" href="#41187"> &para;</a><div class="date" title="2004-04-02 12:26"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom41187">
<div class="phpcode"><code><span class="html">Becarful using this if you are trying to switch out of an existing session rather than load one into a clean slate.<br /><br />session_decode doesn't destroy the existing session data, it will over write it if there is a session variable of the same name, but if the names don't clash the existing session variables will hang around.<br /><br />I have yet to find a better solution than<br /><br />session_destroy()<br />session_start()<br />session_decode(....);<br /><br />-----------------------------------------<br />To explain what I'm talking about<br /><br />&lt;?<br />    session_start();<br />    $a = 5;<br />    session_register('a');<br />    session_decode("&lt;session that doesn't have a as a session variable&gt;");<br />    print (session_is_registered('a') ? $a : 'Not Registered' );<br />?&gt;<br /><br />The above code will print '5' as $a hasn't been destroyed or even unregistered by the session_decode</span></code></div>
  </div>
 </div>
  <div class="note" id="101428">  <div class="votes">
    <div id="Vu101428">
    <a href="/manual/vote-note.php?id=101428&amp;page=function.session-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101428">
    <a href="/manual/vote-note.php?id=101428&amp;page=function.session-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101428" title="54% like this...">
    1
    </div>
  </div>
  <a href="#101428" class="name">
  <strong class="user"><em>davyvandenbremt at gmail dot com</em></strong></a><a class="genanchor" href="#101428"> &para;</a><div class="date" title="2010-12-16 01:18"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101428">
<div class="phpcode"><code><span class="html">Here's what we are using to unserialize the session.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">unserialize_session</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">) {<br />  </span><span class="default">$result </span><span class="keyword">= array();<br />  <br />  </span><span class="comment">// prefixing with semicolon to make it easier to write the regular expression<br />  </span><span class="default">$val </span><span class="keyword">= </span><span class="string">';' </span><span class="keyword">. </span><span class="default">$val</span><span class="keyword">;<br />  <br />  </span><span class="comment">// regularexpression to find the keys<br />  </span><span class="default">$keyreg </span><span class="keyword">= </span><span class="string">'/;([^|{}"]+)\|/'</span><span class="keyword">;<br />  <br />  </span><span class="comment">// find all keys<br />  </span><span class="default">$matches </span><span class="keyword">= array();<br />  </span><span class="default">preg_match_all</span><span class="keyword">(</span><span class="default">$keyreg</span><span class="keyword">, </span><span class="default">$val</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">);<br />  <br />  </span><span class="comment">// only go further if we found some keys<br />  </span><span class="keyword">if (isset(</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">])) {<br />    </span><span class="default">$keys </span><span class="keyword">= </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br />    <br />    </span><span class="comment">// find the values by splitting the input on the key regular expression<br />    </span><span class="default">$values </span><span class="keyword">= </span><span class="default">preg_split</span><span class="keyword">(</span><span class="default">$keyreg</span><span class="keyword">, </span><span class="default">$val</span><span class="keyword">);<br />    <br />    </span><span class="comment">// unshift the first value since it's always empty (due to our semicolon prefix)<br />    </span><span class="keyword">if (</span><span class="default">count</span><span class="keyword">(</span><span class="default">$values</span><span class="keyword">) &gt; </span><span class="default">1</span><span class="keyword">) {<br />      </span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$values</span><span class="keyword">);<br />    }<br />    <br />    </span><span class="comment">// combine the $keys and $values<br />    </span><span class="default">$result </span><span class="keyword">= </span><span class="default">array_combine</span><span class="keyword">(</span><span class="default">$keys</span><span class="keyword">, </span><span class="default">$values</span><span class="keyword">);<br />  }<br />  <br />  return </span><span class="default">$result</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="55307">  <div class="votes">
    <div id="Vu55307">
    <a href="/manual/vote-note.php?id=55307&amp;page=function.session-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd55307">
    <a href="/manual/vote-note.php?id=55307&amp;page=function.session-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V55307" title="50% like this...">
    0
    </div>
  </div>
  <a href="#55307" class="name">
  <strong class="user"><em>brett at brettbrewer dot com</em></strong></a><a class="genanchor" href="#55307"> &para;</a><div class="date" title="2005-07-29 11:25"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom55307">
<div class="phpcode"><code><span class="html">I have made a minor change to fabrizio's (et all) version of the unserializesession function because it was choking on underscores in my variable names.  Here is the correct version which should account for ALL possible PHP variable names:<br /><br />function unserializesession($data) {<br />   $vars=preg_split(<br />             '/([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)\|/',<br />             $data,-1,PREG_SPLIT_NO_EMPTY |                 <br />              PREG_SPLIT_DELIM_CAPTURE<br />             );<br />   for($i=0; $vars[$i]; $i++) {<br />       $result[$vars[$i++]]=unserialize($vars[$i]);     <br />   }<br />   return $result;<br />}<br /><br />Please note that I had to split the preg_split function call above into 4 lines due to the limitations of this forum. This version changes the regex used to find variable names so that it complies with the specs for  variable names as specified in the PHP manual at <a href="http://us3.php.net/manual/en/language.variables.php." rel="nofollow" target="_blank">http://us3.php.net/manual/en/language.variables.php.</a> I just took the regex directly from the PHP manual pages where they give the regex equivalent for a valid variable name as: <br /><br />[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*<br /><br />Anyway, this seems to work great for me now, even on gigantic strings of encoded session data.</span></code></div>
  </div>
 </div>
  <div class="note" id="52874">  <div class="votes">
    <div id="Vu52874">
    <a href="/manual/vote-note.php?id=52874&amp;page=function.session-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52874">
    <a href="/manual/vote-note.php?id=52874&amp;page=function.session-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52874" title="50% like this...">
    0
    </div>
  </div>
  <a href="#52874" class="name">
  <strong class="user"><em>fabrizio dot messina at gmail dot com</em></strong></a><a class="genanchor" href="#52874"> &para;</a><div class="date" title="2005-05-16 06:40"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52874">
<div class="phpcode"><code><span class="html">this function _really_ split and decode session data:<br /><br />function unserializesession($data) {<br />   $vars=preg_split('/([a-zA-Z0-9]+)\|/',$data,-1,PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);<br />   for($i=0; $vars[$i]; $i++) {<br />       $result[$vars[$i++]]=unserialize($vars[$i]);       <br />   }<br />   return $result;<br />}<br /><br />the difference from previously posted 'unserializesession' function is the regular expression inside function preg_split ('[a-zA-Z0-9]+' vs  '[a-z,A-Z]+' )</span></code></div>
  </div>
 </div>
  <div class="note" id="42945">  <div class="votes">
    <div id="Vu42945">
    <a href="/manual/vote-note.php?id=42945&amp;page=function.session-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd42945">
    <a href="/manual/vote-note.php?id=42945&amp;page=function.session-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V42945" title="50% like this...">
    0
    </div>
  </div>
  <a href="#42945" class="name">
  <strong class="user"><em>sco at postmaster dot co dot uk</em></strong></a><a class="genanchor" href="#42945"> &para;</a><div class="date" title="2004-06-04 07:52"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom42945">
<div class="phpcode"><code><span class="html">If you're trying to access your session data from outside the regular php session functions, you might want to use WDDX as your serializer, as opposed to the normal php serializer. When your data is serialized as XML, obviously it's easy to unserialize as you please.<br /><br />WDDX seems to be a little slower, and the text string it creates is much bigger than that created by the normal php serializer, but it provides the functionality with minimal hassle.<br /><br />Donal</span></code></div>
  </div>
 </div>
  <div class="note" id="53232">  <div class="votes">
    <div id="Vu53232">
    <a href="/manual/vote-note.php?id=53232&amp;page=function.session-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53232">
    <a href="/manual/vote-note.php?id=53232&amp;page=function.session-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53232" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#53232" class="name">
  <strong class="user"><em>vesely at tana dot it</em></strong></a><a class="genanchor" href="#53232"> &para;</a><div class="date" title="2005-05-26 03:25"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53232">
<div class="phpcode"><code><span class="html">When using this function to manage sessions, it is MUCH<br />better to have register_globals turned off. Then one can<br />examine the session content given its id.<br /><br /><span class="default">&lt;?php<br />   $fname </span><span class="keyword">= </span><span class="default">session_save_path</span><span class="keyword">() . </span><span class="string">"/sess_" </span><span class="keyword">. </span><span class="default">$the_sid</span><span class="keyword">;<br />   if (</span><span class="default">session_decode</span><span class="keyword">(</span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="default">$fname</span><span class="keyword">)))<br />   {<br />      </span><span class="default">$vars </span><span class="keyword">= </span><span class="default">$_SESSION</span><span class="keyword">;<br />      </span><span class="default">$_SESSION </span><span class="keyword">= array();<br /><br />      </span><span class="comment">// examine $vars...<br />   </span><span class="keyword">}<br /></span><span class="default">?&gt;<br /></span><br />Depending on PHP version, you may need to have a dummy<br />session started for the code above to work. I reset the<br />$_SESSION immediately in order to avoid writing the<br />dummy session: that's needed while testing the code!</span></code></div>
  </div>
 </div>
  <div class="note" id="101687">  <div class="votes">
    <div id="Vu101687">
    <a href="/manual/vote-note.php?id=101687&amp;page=function.session-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101687">
    <a href="/manual/vote-note.php?id=101687&amp;page=function.session-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101687" title="28% like this...">
    -3
    </div>
  </div>
  <a href="#101687" class="name">
  <strong class="user"><em>jason at joeymail dot net</em></strong></a><a class="genanchor" href="#101687"> &para;</a><div class="date" title="2011-01-04 04:23"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101687">
<div class="phpcode"><code><span class="html">Yet another attempt a wheel re-invention, using match with offsets rather than split...<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">unserializesession</span><span class="keyword">( </span><span class="default">$data </span><span class="keyword">)<br />{<br />    if(  </span><span class="default">strlen</span><span class="keyword">( </span><span class="default">$data</span><span class="keyword">) == </span><span class="default">0</span><span class="keyword">)<br />    {<br />        return array();<br />    }<br />    <br />    </span><span class="comment">// match all the session keys and offsets<br />    </span><span class="default">preg_match_all</span><span class="keyword">(</span><span class="string">'/(^|;|\})([a-zA-Z0-9_]+)\|/i'</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">, </span><span class="default">$matchesarray</span><span class="keyword">, </span><span class="default">PREG_OFFSET_CAPTURE</span><span class="keyword">);<br /><br />    </span><span class="default">$returnArray </span><span class="keyword">= array();<br /><br />    </span><span class="default">$lastOffset </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />    </span><span class="default">$currentKey </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />    foreach ( </span><span class="default">$matchesarray</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] as </span><span class="default">$value </span><span class="keyword">)<br />    {<br />        </span><span class="default">$offset </span><span class="keyword">= </span><span class="default">$value</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br />        if(!</span><span class="default">is_null</span><span class="keyword">( </span><span class="default">$lastOffset</span><span class="keyword">))<br />        {<br />            </span><span class="default">$valueText </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, </span><span class="default">$lastOffset</span><span class="keyword">, </span><span class="default">$offset </span><span class="keyword">- </span><span class="default">$lastOffset </span><span class="keyword">);<br />            </span><span class="default">$returnArray</span><span class="keyword">[</span><span class="default">$currentKey</span><span class="keyword">] = </span><span class="default">unserialize</span><span class="keyword">(</span><span class="default">$valueText</span><span class="keyword">);<br />        }<br />        </span><span class="default">$currentKey </span><span class="keyword">= </span><span class="default">$value</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br /><br />        </span><span class="default">$lastOffset </span><span class="keyword">= </span><span class="default">$offset </span><span class="keyword">+ </span><span class="default">strlen</span><span class="keyword">( </span><span class="default">$currentKey </span><span class="keyword">)+</span><span class="default">1</span><span class="keyword">;<br />    }<br /><br />    </span><span class="default">$valueText </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, </span><span class="default">$lastOffset </span><span class="keyword">);<br />    </span><span class="default">$returnArray</span><span class="keyword">[</span><span class="default">$currentKey</span><span class="keyword">] = </span><span class="default">unserialize</span><span class="keyword">(</span><span class="default">$valueText</span><span class="keyword">);<br />    <br />    return </span><span class="default">$returnArray</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="57897">  <div class="votes">
    <div id="Vu57897">
    <a href="/manual/vote-note.php?id=57897&amp;page=function.session-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57897">
    <a href="/manual/vote-note.php?id=57897&amp;page=function.session-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57897" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#57897" class="name">
  <strong class="user"><em>erwinmoller at xs4all dot nl</em></strong></a><a class="genanchor" href="#57897"> &para;</a><div class="date" title="2005-10-18 07:25"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom57897">
<div class="phpcode"><code><span class="html">The regExp-method describe earlier doesn't work under all conditions.<br /><br />If I feed this:<br />voornaam|s:8:"Ai|;\'\"";achternaam|s:6:"werrwe";leeftijd|i:44;<br /><br />I get this:<br />array(4) {<br />  ["voornaam"]=&gt;<br />  bool(false)<br />  ["Ai"]=&gt;<br />  bool(false)<br />  ["achternaam"]=&gt;<br />  string(6) "werrwe"<br />  ["leeftijd"]=&gt;<br />  int(44)<br />}<br /><br />while I expected:<br />array(3) {<br />  ["voornaam"]=&gt;<br />  string(8) "Ai|;\'\""<br />  ["achternaam"]=&gt;<br />  string(6) "werrwe"<br />  ["leeftijd"]=&gt;<br />  int(44)<br />}<br /><br />I think the | is messing things up. :-/</span></code></div>
  </div>
 </div>
  <div class="note" id="38221">  <div class="votes">
    <div id="Vu38221">
    <a href="/manual/vote-note.php?id=38221&amp;page=function.session-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd38221">
    <a href="/manual/vote-note.php?id=38221&amp;page=function.session-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V38221" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#38221" class="name">
  <strong class="user"><em>njail</em></strong></a><a class="genanchor" href="#38221"> &para;</a><div class="date" title="2003-12-12 12:28"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom38221">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?PHP<br /></span><span class="comment">// Get Session Content<br /></span><span class="default">$varsess </span><span class="keyword">= Array(</span><span class="string">'SESSION'</span><span class="keyword">);<br />for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">sizeof</span><span class="keyword">(</span><span class="default">$varsess</span><span class="keyword">); </span><span class="default">$i</span><span class="keyword">++)<br />{<br />  if (</span><span class="default">is_array</span><span class="keyword">(${</span><span class="string">"_</span><span class="keyword">{</span><span class="default">$varsess</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]}</span><span class="string">"</span><span class="keyword">}))<br />  {<br />    foreach (${</span><span class="string">"_</span><span class="keyword">{</span><span class="default">$varsess</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]}</span><span class="string">"</span><span class="keyword">} as </span><span class="default">$var</span><span class="keyword">=&gt;</span><span class="default">$val</span><span class="keyword">)<br />    {<br />    $</span><span class="default">$var </span><span class="keyword">= </span><span class="default">$val</span><span class="keyword">;<br />    </span><span class="comment">// print "Var :".$var." -- Value :".$val."\n&lt;br&gt;";<br />    </span><span class="keyword">}<br />  }<br />  unset(${</span><span class="string">"_</span><span class="keyword">{</span><span class="default">$varsess</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]}</span><span class="string">"</span><span class="keyword">});<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="78640">  <div class="votes">
    <div id="Vu78640">
    <a href="/manual/vote-note.php?id=78640&amp;page=function.session-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78640">
    <a href="/manual/vote-note.php?id=78640&amp;page=function.session-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78640" title="20% like this...">
    -3
    </div>
  </div>
  <a href="#78640" class="name">
  <strong class="user"><em>ac</em></strong></a><a class="genanchor" href="#78640"> &para;</a><div class="date" title="2007-10-20 07:46"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78640">
<div class="phpcode"><code><span class="html">this solved my | problem:<br /><br />function unserializesession($data) {<br />    $vars=preg_split('/([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff^|]*)\|/',<br />              $data,-1,PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);<br />    for($i=0; $vars[$i]; $i++) $result[$vars[$i++]]=unserialize($vars[$i]);<br />    return $result;<br />}</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.session-decode&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.session-decode.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.session.php">Session Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.session-abort.php" title="session_&#8203;abort">session_&#8203;abort</a>
                        </li>
                                                <li class="">
                            <a href="function.session-cache-expire.php" title="session_&#8203;cache_&#8203;expire">session_&#8203;cache_&#8203;expire</a>
                        </li>
                                                <li class="">
                            <a href="function.session-cache-limiter.php" title="session_&#8203;cache_&#8203;limiter">session_&#8203;cache_&#8203;limiter</a>
                        </li>
                                                <li class="">
                            <a href="function.session-commit.php" title="session_&#8203;commit">session_&#8203;commit</a>
                        </li>
                                                <li class="">
                            <a href="function.session-create-id.php" title="session_&#8203;create_&#8203;id">session_&#8203;create_&#8203;id</a>
                        </li>
                                                <li class="current">
                            <a href="function.session-decode.php" title="session_&#8203;decode">session_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.session-destroy.php" title="session_&#8203;destroy">session_&#8203;destroy</a>
                        </li>
                                                <li class="">
                            <a href="function.session-encode.php" title="session_&#8203;encode">session_&#8203;encode</a>
                        </li>
                                                <li class="">
                            <a href="function.session-gc.php" title="session_&#8203;gc">session_&#8203;gc</a>
                        </li>
                                                <li class="">
                            <a href="function.session-get-cookie-params.php" title="session_&#8203;get_&#8203;cookie_&#8203;params">session_&#8203;get_&#8203;cookie_&#8203;params</a>
                        </li>
                                                <li class="">
                            <a href="function.session-id.php" title="session_&#8203;id">session_&#8203;id</a>
                        </li>
                                                <li class="">
                            <a href="function.session-module-name.php" title="session_&#8203;module_&#8203;name">session_&#8203;module_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.session-name.php" title="session_&#8203;name">session_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.session-regenerate-id.php" title="session_&#8203;regenerate_&#8203;id">session_&#8203;regenerate_&#8203;id</a>
                        </li>
                                                <li class="">
                            <a href="function.session-register-shutdown.php" title="session_&#8203;register_&#8203;shutdown">session_&#8203;register_&#8203;shutdown</a>
                        </li>
                                                <li class="">
                            <a href="function.session-reset.php" title="session_&#8203;reset">session_&#8203;reset</a>
                        </li>
                                                <li class="">
                            <a href="function.session-save-path.php" title="session_&#8203;save_&#8203;path">session_&#8203;save_&#8203;path</a>
                        </li>
                                                <li class="">
                            <a href="function.session-set-cookie-params.php" title="session_&#8203;set_&#8203;cookie_&#8203;params">session_&#8203;set_&#8203;cookie_&#8203;params</a>
                        </li>
                                                <li class="">
                            <a href="function.session-set-save-handler.php" title="session_&#8203;set_&#8203;save_&#8203;handler">session_&#8203;set_&#8203;save_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.session-start.php" title="session_&#8203;start">session_&#8203;start</a>
                        </li>
                                                <li class="">
                            <a href="function.session-status.php" title="session_&#8203;status">session_&#8203;status</a>
                        </li>
                                                <li class="">
                            <a href="function.session-unset.php" title="session_&#8203;unset">session_&#8203;unset</a>
                        </li>
                                                <li class="">
                            <a href="function.session-write-close.php" title="session_&#8203;write_&#8203;close">session_&#8203;write_&#8203;close</a>
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
