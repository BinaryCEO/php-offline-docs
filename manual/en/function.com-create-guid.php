<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: com_create_guid - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.com-create-guid.php">
 <link rel="shorturl" href="https://www.php.net/com-create-guid">
 <link rel="alternate" href="https://www.php.net/com-create-guid" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.com.php">
 <link rel="prev" href="https://www.php.net/manual/en/ref.com.php">
 <link rel="next" href="https://www.php.net/manual/en/function.com-event-sink.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.com-create-guid.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.com-create-guid.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.com-create-guid.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.com-create-guid.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.com-create-guid.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.com-create-guid.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.com-create-guid.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.com-create-guid.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.com-create-guid.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.com-create-guid.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.com-create-guid.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Generate a globally unique identifier (GUID)" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: com_create_guid - Manual" />
<meta name="twitter:description" content="Generate a globally unique identifier (GUID)" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: com_create_guid - Manual" />
<meta itemprop="description" content="Generate a globally unique identifier (GUID)" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Generate a globally unique identifier (GUID)" />

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
        <a href="function.com-event-sink.php">
          com_event_sink &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="ref.com.php">
          &laquo; COM Functions        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.utilspec.windows.php'>Windows Only Extensions</a></li>      <li><a href='book.com.php'>COM</a></li>      <li><a href='ref.com.php'>COM Functions</a></li>      </ul>
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
            <option value='en/function.com-create-guid.php' selected="selected">English</option>
            <option value='de/function.com-create-guid.php'>German</option>
            <option value='es/function.com-create-guid.php'>Spanish</option>
            <option value='fr/function.com-create-guid.php'>French</option>
            <option value='it/function.com-create-guid.php'>Italian</option>
            <option value='ja/function.com-create-guid.php'>Japanese</option>
            <option value='pt_BR/function.com-create-guid.php'>Brazilian Portuguese</option>
            <option value='ru/function.com-create-guid.php'>Russian</option>
            <option value='tr/function.com-create-guid.php'>Turkish</option>
            <option value='uk/function.com-create-guid.php'>Ukrainian</option>
            <option value='zh/function.com-create-guid.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.com-create-guid" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">com_create_guid</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">com_create_guid</span> &mdash; <span class="dc-title">Generate a globally unique identifier (GUID)</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.com-create-guid-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>com_create_guid</strong></span>(): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Generates a Globally Unique Identifier (GUID).
  </p>
  <p class="para">
   A GUID is generated in the same way as DCE UUID&#039;s, except that the
   Microsoft convention is to enclose a GUID in curly braces.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.com-create-guid-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.com-create-guid-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the GUID as a string,  or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.com-create-guid-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><strong>uuid_create()</strong></span> in the PECL uuid extension</li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/com/functions/com-create-guid.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.com-create-guid%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.com-create-guid&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.com-create-guid.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="119168">  <div class="votes">
    <div id="Vu119168">
    <a href="/manual/vote-note.php?id=119168&amp;page=function.com-create-guid&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119168">
    <a href="/manual/vote-note.php?id=119168&amp;page=function.com-create-guid&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119168" title="74% like this...">
    36
    </div>
  </div>
  <a href="#119168" class="name">
  <strong class="user"><em>Dave Pearson (dave at pds-uk dot com)</em></strong></a><a class="genanchor" href="#119168"> &para;</a><div class="date" title="2016-04-14 10:07"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119168">
<div class="phpcode"><code><span class="html">Here's my final version of a GUIDv4 function (based on others work here) that should work on all platforms and gracefully fallback to less cryptographically secure version if others are not supported...<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * Returns a GUIDv4 string<br /> *<br /> * Uses the best cryptographically secure method <br /> * for all supported pltforms with fallback to an older, <br /> * less secure version.<br /> *<br /> * @param bool $trim<br /> * @return string<br /> */<br /></span><span class="keyword">function </span><span class="default">GUIDv4 </span><span class="keyword">(</span><span class="default">$trim </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">)<br />{<br />    </span><span class="comment">// Windows<br />    </span><span class="keyword">if (</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'com_create_guid'</span><span class="keyword">) === </span><span class="default">true</span><span class="keyword">) {<br />        if (</span><span class="default">$trim </span><span class="keyword">=== </span><span class="default">true</span><span class="keyword">)<br />            return </span><span class="default">trim</span><span class="keyword">(</span><span class="default">com_create_guid</span><span class="keyword">(), </span><span class="string">'{}'</span><span class="keyword">);<br />        else<br />            return </span><span class="default">com_create_guid</span><span class="keyword">();<br />    }<br /><br />    </span><span class="comment">// OSX/Linux<br />    </span><span class="keyword">if (</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'openssl_random_pseudo_bytes'</span><span class="keyword">) === </span><span class="default">true</span><span class="keyword">) {<br />        </span><span class="default">$data </span><span class="keyword">= </span><span class="default">openssl_random_pseudo_bytes</span><span class="keyword">(</span><span class="default">16</span><span class="keyword">);<br />        </span><span class="default">$data</span><span class="keyword">[</span><span class="default">6</span><span class="keyword">] = </span><span class="default">chr</span><span class="keyword">(</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">[</span><span class="default">6</span><span class="keyword">]) &amp; </span><span class="default">0x0f </span><span class="keyword">| </span><span class="default">0x40</span><span class="keyword">);    </span><span class="comment">// set version to 0100<br />        </span><span class="default">$data</span><span class="keyword">[</span><span class="default">8</span><span class="keyword">] = </span><span class="default">chr</span><span class="keyword">(</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">[</span><span class="default">8</span><span class="keyword">]) &amp; </span><span class="default">0x3f </span><span class="keyword">| </span><span class="default">0x80</span><span class="keyword">);    </span><span class="comment">// set bits 6-7 to 10<br />        </span><span class="keyword">return </span><span class="default">vsprintf</span><span class="keyword">(</span><span class="string">'%s%s-%s-%s-%s-%s%s%s'</span><span class="keyword">, </span><span class="default">str_split</span><span class="keyword">(</span><span class="default">bin2hex</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">), </span><span class="default">4</span><span class="keyword">));<br />    }<br /><br />    </span><span class="comment">// Fallback (PHP 4.2+)<br />    </span><span class="default">mt_srand</span><span class="keyword">((double)</span><span class="default">microtime</span><span class="keyword">() * </span><span class="default">10000</span><span class="keyword">);<br />    </span><span class="default">$charid </span><span class="keyword">= </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">md5</span><span class="keyword">(</span><span class="default">uniqid</span><span class="keyword">(</span><span class="default">rand</span><span class="keyword">(), </span><span class="default">true</span><span class="keyword">)));<br />    </span><span class="default">$hyphen </span><span class="keyword">= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">45</span><span class="keyword">);                  </span><span class="comment">// "-"<br />    </span><span class="default">$lbrace </span><span class="keyword">= </span><span class="default">$trim </span><span class="keyword">? </span><span class="string">"" </span><span class="keyword">: </span><span class="default">chr</span><span class="keyword">(</span><span class="default">123</span><span class="keyword">);    </span><span class="comment">// "{"<br />    </span><span class="default">$rbrace </span><span class="keyword">= </span><span class="default">$trim </span><span class="keyword">? </span><span class="string">"" </span><span class="keyword">: </span><span class="default">chr</span><span class="keyword">(</span><span class="default">125</span><span class="keyword">);    </span><span class="comment">// "}"<br />    </span><span class="default">$guidv4 </span><span class="keyword">= </span><span class="default">$lbrace</span><span class="keyword">.<br />              </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$charid</span><span class="keyword">,  </span><span class="default">0</span><span class="keyword">,  </span><span class="default">8</span><span class="keyword">).</span><span class="default">$hyphen</span><span class="keyword">.<br />              </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$charid</span><span class="keyword">,  </span><span class="default">8</span><span class="keyword">,  </span><span class="default">4</span><span class="keyword">).</span><span class="default">$hyphen</span><span class="keyword">.<br />              </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$charid</span><span class="keyword">, </span><span class="default">12</span><span class="keyword">,  </span><span class="default">4</span><span class="keyword">).</span><span class="default">$hyphen</span><span class="keyword">.<br />              </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$charid</span><span class="keyword">, </span><span class="default">16</span><span class="keyword">,  </span><span class="default">4</span><span class="keyword">).</span><span class="default">$hyphen</span><span class="keyword">.<br />              </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$charid</span><span class="keyword">, </span><span class="default">20</span><span class="keyword">, </span><span class="default">12</span><span class="keyword">).<br />              </span><span class="default">$rbrace</span><span class="keyword">;<br />    return </span><span class="default">$guidv4</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="99425">  <div class="votes">
    <div id="Vu99425">
    <a href="/manual/vote-note.php?id=99425&amp;page=function.com-create-guid&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99425">
    <a href="/manual/vote-note.php?id=99425&amp;page=function.com-create-guid&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99425" title="65% like this...">
    40
    </div>
  </div>
  <a href="#99425" class="name">
  <strong class="user"><em>Alix Axel</em></strong></a><a class="genanchor" href="#99425"> &para;</a><div class="date" title="2010-08-16 03:59"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99425">
<div class="phpcode"><code><span class="html">The phunction PHP framework (<a href="http://sourceforge.net/projects/phunction/" rel="nofollow" target="_blank">http://sourceforge.net/projects/phunction/</a>) uses the following function to generate valid version 4 UUIDs:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">GUID</span><span class="keyword">()<br />{<br />    if (</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'com_create_guid'</span><span class="keyword">) === </span><span class="default">true</span><span class="keyword">)<br />    {<br />        return </span><span class="default">trim</span><span class="keyword">(</span><span class="default">com_create_guid</span><span class="keyword">(), </span><span class="string">'{}'</span><span class="keyword">);<br />    }<br /><br />    return </span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">'%04X%04X-%04X-%04X-%04X-%04X%04X%04X'</span><span class="keyword">, </span><span class="default">mt_rand</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">65535</span><span class="keyword">), </span><span class="default">mt_rand</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">65535</span><span class="keyword">), </span><span class="default">mt_rand</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">65535</span><span class="keyword">), </span><span class="default">mt_rand</span><span class="keyword">(</span><span class="default">16384</span><span class="keyword">, </span><span class="default">20479</span><span class="keyword">), </span><span class="default">mt_rand</span><span class="keyword">(</span><span class="default">32768</span><span class="keyword">, </span><span class="default">49151</span><span class="keyword">), </span><span class="default">mt_rand</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">65535</span><span class="keyword">), </span><span class="default">mt_rand</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">65535</span><span class="keyword">), </span><span class="default">mt_rand</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">65535</span><span class="keyword">));<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />The output generated by the sprintf() and mt_rand() calls is identical to com_create_guid() results.</span></code></div>
  </div>
 </div>
  <div class="note" id="117893">  <div class="votes">
    <div id="Vu117893">
    <a href="/manual/vote-note.php?id=117893&amp;page=function.com-create-guid&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117893">
    <a href="/manual/vote-note.php?id=117893&amp;page=function.com-create-guid&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117893" title="65% like this...">
    27
    </div>
  </div>
  <a href="#117893" class="name">
  <strong class="user"><em>pavel.volyntsev(at)gmail</em></strong></a><a class="genanchor" href="#117893"> &para;</a><div class="date" title="2015-08-27 12:37"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117893">
<div class="phpcode"><code><span class="html">Use more cryptographically strong algorithm to generate pseudo-random bytes and format it as GUID v4 string<br /><br />function guidv4()<br />{<br />    if (function_exists('com_create_guid') === true)<br />        return trim(com_create_guid(), '{}');<br /><br />    $data = openssl_random_pseudo_bytes(16);<br />    $data[6] = chr(ord($data[6]) &amp; 0x0f | 0x40); // set version to 0100<br />    $data[8] = chr(ord($data[8]) &amp; 0x3f | 0x80); // set bits 6-7 to 10<br />    return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="118282">  <div class="votes">
    <div id="Vu118282">
    <a href="/manual/vote-note.php?id=118282&amp;page=function.com-create-guid&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118282">
    <a href="/manual/vote-note.php?id=118282&amp;page=function.com-create-guid&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118282" title="68% like this...">
    11
    </div>
  </div>
  <a href="#118282" class="name">
  <strong class="user"><em>indrora</em></strong></a><a class="genanchor" href="#118282"> &para;</a><div class="date" title="2015-11-08 07:09"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118282">
<div class="phpcode"><code><span class="html">If you're going to generate random UUIDs, at least make them conform:<br /><br />* The uppermost byte of the third stanza must be 4<br />* the uppermost byte of the fourth stanza may be any of (8 9 a b)<br /><br />see also: The wikipedia page for UUIDs: <a href="https://en.wikipedia.org/wiki/Universally_unique_identifier#Version_4_.28random.29" rel="nofollow" target="_blank">https://en.wikipedia.org/wiki/Universally_unique_identifier#Version_4_.28random.29</a></span></code></div>
  </div>
 </div>
  <div class="note" id="124635">  <div class="votes">
    <div id="Vu124635">
    <a href="/manual/vote-note.php?id=124635&amp;page=function.com-create-guid&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124635">
    <a href="/manual/vote-note.php?id=124635&amp;page=function.com-create-guid&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124635" title="50% like this...">
    0
    </div>
  </div>
  <a href="#124635" class="name">
  <strong class="user"><em>internmail (at the google mail).com</em></strong></a><a class="genanchor" href="#124635"> &para;</a><div class="date" title="2020-01-22 02:26"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124635">
<div class="phpcode"><code><span class="html">function create_guid() { // Create GUID (Globally Unique Identifier)<br />        $guid = '';<br />        $namespace = rand(11111, 99999);<br />        $uid = uniqid('', true);<br />        $data = $namespace;<br />        $data .= $_SERVER['REQUEST_TIME'];<br />        $data .= $_SERVER['HTTP_USER_AGENT'];<br />        $data .= $_SERVER['REMOTE_ADDR'];<br />        $data .= $_SERVER['REMOTE_PORT'];<br />        $hash = strtoupper(hash('ripemd128', $uid . $guid . md5($data)));<br />        $guid = substr($hash,  0,  8) . '-' .<br />                substr($hash,  8,  4) . '-' .<br />                substr($hash, 12,  4) . '-' .<br />                substr($hash, 16,  4) . '-' .<br />                substr($hash, 20, 12);<br />        return $guid;<br />    }</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.com-create-guid&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.com-create-guid.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.com.php">COM Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="function.com-create-guid.php" title="com_&#8203;create_&#8203;guid">com_&#8203;create_&#8203;guid</a>
                        </li>
                                                <li class="">
                            <a href="function.com-event-sink.php" title="com_&#8203;event_&#8203;sink">com_&#8203;event_&#8203;sink</a>
                        </li>
                                                <li class="">
                            <a href="function.com-get-active-object.php" title="com_&#8203;get_&#8203;active_&#8203;object">com_&#8203;get_&#8203;active_&#8203;object</a>
                        </li>
                                                <li class="">
                            <a href="function.com-load-typelib.php" title="com_&#8203;load_&#8203;typelib">com_&#8203;load_&#8203;typelib</a>
                        </li>
                                                <li class="">
                            <a href="function.com-message-pump.php" title="com_&#8203;message_&#8203;pump">com_&#8203;message_&#8203;pump</a>
                        </li>
                                                <li class="">
                            <a href="function.com-print-typeinfo.php" title="com_&#8203;print_&#8203;typeinfo">com_&#8203;print_&#8203;typeinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.variant-abs.php" title="variant_&#8203;abs">variant_&#8203;abs</a>
                        </li>
                                                <li class="">
                            <a href="function.variant-add.php" title="variant_&#8203;add">variant_&#8203;add</a>
                        </li>
                                                <li class="">
                            <a href="function.variant-and.php" title="variant_&#8203;and">variant_&#8203;and</a>
                        </li>
                                                <li class="">
                            <a href="function.variant-cast.php" title="variant_&#8203;cast">variant_&#8203;cast</a>
                        </li>
                                                <li class="">
                            <a href="function.variant-cat.php" title="variant_&#8203;cat">variant_&#8203;cat</a>
                        </li>
                                                <li class="">
                            <a href="function.variant-cmp.php" title="variant_&#8203;cmp">variant_&#8203;cmp</a>
                        </li>
                                                <li class="">
                            <a href="function.variant-date-from-timestamp.php" title="variant_&#8203;date_&#8203;from_&#8203;timestamp">variant_&#8203;date_&#8203;from_&#8203;timestamp</a>
                        </li>
                                                <li class="">
                            <a href="function.variant-date-to-timestamp.php" title="variant_&#8203;date_&#8203;to_&#8203;timestamp">variant_&#8203;date_&#8203;to_&#8203;timestamp</a>
                        </li>
                                                <li class="">
                            <a href="function.variant-div.php" title="variant_&#8203;div">variant_&#8203;div</a>
                        </li>
                                                <li class="">
                            <a href="function.variant-eqv.php" title="variant_&#8203;eqv">variant_&#8203;eqv</a>
                        </li>
                                                <li class="">
                            <a href="function.variant-fix.php" title="variant_&#8203;fix">variant_&#8203;fix</a>
                        </li>
                                                <li class="">
                            <a href="function.variant-get-type.php" title="variant_&#8203;get_&#8203;type">variant_&#8203;get_&#8203;type</a>
                        </li>
                                                <li class="">
                            <a href="function.variant-idiv.php" title="variant_&#8203;idiv">variant_&#8203;idiv</a>
                        </li>
                                                <li class="">
                            <a href="function.variant-imp.php" title="variant_&#8203;imp">variant_&#8203;imp</a>
                        </li>
                                                <li class="">
                            <a href="function.variant-int.php" title="variant_&#8203;int">variant_&#8203;int</a>
                        </li>
                                                <li class="">
                            <a href="function.variant-mod.php" title="variant_&#8203;mod">variant_&#8203;mod</a>
                        </li>
                                                <li class="">
                            <a href="function.variant-mul.php" title="variant_&#8203;mul">variant_&#8203;mul</a>
                        </li>
                                                <li class="">
                            <a href="function.variant-neg.php" title="variant_&#8203;neg">variant_&#8203;neg</a>
                        </li>
                                                <li class="">
                            <a href="function.variant-not.php" title="variant_&#8203;not">variant_&#8203;not</a>
                        </li>
                                                <li class="">
                            <a href="function.variant-or.php" title="variant_&#8203;or">variant_&#8203;or</a>
                        </li>
                                                <li class="">
                            <a href="function.variant-pow.php" title="variant_&#8203;pow">variant_&#8203;pow</a>
                        </li>
                                                <li class="">
                            <a href="function.variant-round.php" title="variant_&#8203;round">variant_&#8203;round</a>
                        </li>
                                                <li class="">
                            <a href="function.variant-set.php" title="variant_&#8203;set">variant_&#8203;set</a>
                        </li>
                                                <li class="">
                            <a href="function.variant-set-type.php" title="variant_&#8203;set_&#8203;type">variant_&#8203;set_&#8203;type</a>
                        </li>
                                                <li class="">
                            <a href="function.variant-sub.php" title="variant_&#8203;sub">variant_&#8203;sub</a>
                        </li>
                                                <li class="">
                            <a href="function.variant-xor.php" title="variant_&#8203;xor">variant_&#8203;xor</a>
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
