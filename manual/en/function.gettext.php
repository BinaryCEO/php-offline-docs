<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: gettext - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.gettext.php">
 <link rel="shorturl" href="https://www.php.net/gettext">
 <link rel="alternate" href="https://www.php.net/gettext" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.gettext.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.dngettext.php">
 <link rel="next" href="https://www.php.net/manual/en/function.ngettext.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.gettext.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.gettext.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.gettext.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.gettext.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.gettext.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.gettext.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.gettext.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.gettext.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.gettext.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.gettext.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.gettext.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Lookup a message in the current domain" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: gettext - Manual" />
<meta name="twitter:description" content="Lookup a message in the current domain" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: gettext - Manual" />
<meta itemprop="description" content="Lookup a message in the current domain" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Lookup a message in the current domain" />

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
        <a href="function.ngettext.php">
          ngettext &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.dngettext.php">
          &laquo; dngettext        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.international.php'>Human Language and Character Encoding Support</a></li>      <li><a href='book.gettext.php'>Gettext</a></li>      <li><a href='ref.gettext.php'>Gettext Functions</a></li>      </ul>
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
            <option value='en/function.gettext.php' selected="selected">English</option>
            <option value='de/function.gettext.php'>German</option>
            <option value='es/function.gettext.php'>Spanish</option>
            <option value='fr/function.gettext.php'>French</option>
            <option value='it/function.gettext.php'>Italian</option>
            <option value='ja/function.gettext.php'>Japanese</option>
            <option value='pt_BR/function.gettext.php'>Brazilian Portuguese</option>
            <option value='ru/function.gettext.php'>Russian</option>
            <option value='tr/function.gettext.php'>Turkish</option>
            <option value='uk/function.gettext.php'>Ukrainian</option>
            <option value='zh/function.gettext.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.gettext" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">gettext</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">gettext</span> &mdash; <span class="dc-title">Lookup a message in the current domain</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.gettext-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>gettext</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$message</code></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
   Looks up a message in the current domain.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.gettext-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">message</code></dt>
     <dd>
      <p class="para">
       The message being translated.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.gettext-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns a translated <span class="type"><a href="language.types.string.php" class="type string">string</a></span> if one is found in the 
   translation table, or the submitted message if not found.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.gettext-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2463">
    <p><strong>Example #1 <span class="function"><strong>gettext()</strong></span>-check</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Set language to German<br /></span><span style="color: #0000BB">putenv</span><span style="color: #007700">(</span><span style="color: #DD0000">'LC_ALL=de_DE'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">setlocale</span><span style="color: #007700">(</span><span style="color: #0000BB">LC_ALL</span><span style="color: #007700">, </span><span style="color: #DD0000">'de_DE'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Specify location of translation tables<br /></span><span style="color: #0000BB">bindtextdomain</span><span style="color: #007700">(</span><span style="color: #DD0000">"myPHPApp"</span><span style="color: #007700">, </span><span style="color: #DD0000">"./locale"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Choose domain<br /></span><span style="color: #0000BB">textdomain</span><span style="color: #007700">(</span><span style="color: #DD0000">"myPHPApp"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Translation is looking for in ./locale/de_DE/LC_MESSAGES/myPHPApp.mo now<br /><br />// Print a test message<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">gettext</span><span style="color: #007700">(</span><span style="color: #DD0000">"Welcome to My PHP Application"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Or use the alias _() for gettext()<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">_</span><span style="color: #007700">(</span><span style="color: #DD0000">"Have a nice day"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>
 

 <div class="refsect1 notes" id="refsect1-function.gettext-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    You may use the underscore character &#039;_&#039; as an alias to this function.
   </p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Setting a language isn&#039;t enough for some systems and the 
    <span class="function"><a href="function.putenv.php" class="function">putenv()</a></span> should be used to define the 
    current locale.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.gettext-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.-.php" class="function" rel="rdfs-seeAlso">_()</a> - Alias of gettext</span></li>
    <li><span class="function"><a href="function.setlocale.php" class="function" rel="rdfs-seeAlso">setlocale()</a> - Set locale information</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/gettext/functions/gettext.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.gettext%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.gettext&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.gettext.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">16 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="122903">  <div class="votes">
    <div id="Vu122903">
    <a href="/manual/vote-note.php?id=122903&amp;page=function.gettext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122903">
    <a href="/manual/vote-note.php?id=122903&amp;page=function.gettext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122903" title="66% like this...">
    7
    </div>
  </div>
  <a href="#122903" class="name">
  <strong class="user"><em>kingjackal at gmail dot com</em></strong></a><a class="genanchor" href="#122903"> &para;</a><div class="date" title="2018-07-02 11:13"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122903">
<div class="phpcode"><code><span class="html">If your PO/MO files make use of msgctxt (Context), you'll be frustrated to find that gettext(msgid) won't work as you might expect (even if msgid is unique).<br /><br />In this case, you must use ASCII char 4 [EOT, End Of Text] glued between the msgctxt and msgid.<br /><br />Example PO content:<br /><br />    msgctxt "Context"<br />    msgid "Test string"<br />    msgstr "Test translation"<br /><br />    msgid "Standard string"<br />    msgstr "Standard translation"<br /><br />The following will work:<br /><br /><span class="default">&lt;?php<br />gettext</span><span class="keyword">(</span><span class="string">'Context' </span><span class="keyword">. </span><span class="string">"\004" </span><span class="keyword">. </span><span class="string">'Test string'</span><span class="keyword">);<br /></span><span class="default">gettext</span><span class="keyword">(</span><span class="string">'Standard string'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />The following will NOT work:<br /><br /><span class="default">&lt;?php<br />gettext</span><span class="keyword">(</span><span class="string">'Test string'</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="110735">  <div class="votes">
    <div id="Vu110735">
    <a href="/manual/vote-note.php?id=110735&amp;page=function.gettext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110735">
    <a href="/manual/vote-note.php?id=110735&amp;page=function.gettext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110735" title="61% like this...">
    8
    </div>
  </div>
  <a href="#110735" class="name">
  <strong class="user"><em>ashi009 at gmail dot com</em></strong></a><a class="genanchor" href="#110735"> &para;</a><div class="date" title="2012-11-29 04:34"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110735">
<div class="phpcode"><code><span class="html">The simplest way to by-pass gettext() cache, without restart apache nor change domain.<br /><br />The fix is incredible simple, first create a dummy link to the locale folder where .mo files stored:<br /><br />cd locale<br />ln -s . nocache<br /><br />Then add one single line before bindtextdomain()<br /><br /><span class="default">&lt;?php<br />bindtextdomain</span><span class="keyword">(</span><span class="string">'domain'</span><span class="keyword">, </span><span class="string">'./locale/nocache'</span><span class="keyword">);<br /></span><span class="default">bindtextdomain</span><span class="keyword">(</span><span class="string">'domain'</span><span class="keyword">, </span><span class="string">'./locale'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Now the cache is forced to flush every time.</span></code></div>
  </div>
 </div>
  <div class="note" id="114062">  <div class="votes">
    <div id="Vu114062">
    <a href="/manual/vote-note.php?id=114062&amp;page=function.gettext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114062">
    <a href="/manual/vote-note.php?id=114062&amp;page=function.gettext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114062" title="64% like this...">
    5
    </div>
  </div>
  <a href="#114062" class="name">
  <strong class="user"><em>mikko dot rantalainen at peda dot net</em></strong></a><a class="genanchor" href="#114062"> &para;</a><div class="date" title="2014-01-08 06:17"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114062">
<div class="phpcode"><code><span class="html">Worth noting is that gettext honors environment variables while selecting the language to use: <a href="http://www.gnu.org/software/gettext/manual/html_node/Locale-Environment-Variables.html" rel="nofollow" target="_blank">http://www.gnu.org/software/gettext/manual/html_node/Locale-Environment-Variables.html</a><br /><br />"When a program looks up locale dependent values, it does this according to the following environment variables, in priority order:<br /><br />    LANGUAGE<br />    LC_ALL<br />    LC_xxx, according to selected locale category: LC_CTYPE, LC_NUMERIC, LC_TIME, LC_COLLATE, LC_MONETARY, LC_MESSAGES, ...<br />    LANG <br /><br />Variables whose value is set but is empty are ignored in this lookup. "<br /><br />In short, if you have non-empty LANGUAGE, you may end up with unexpected localization strings. On the other hand, LANGUAGE can be used to define fallback language if some translation is missing.</span></code></div>
  </div>
 </div>
  <div class="note" id="96540">  <div class="votes">
    <div id="Vu96540">
    <a href="/manual/vote-note.php?id=96540&amp;page=function.gettext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96540">
    <a href="/manual/vote-note.php?id=96540&amp;page=function.gettext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96540" title="60% like this...">
    6
    </div>
  </div>
  <a href="#96540" class="name">
  <strong class="user"><em>surfchen at gmail dot com</em></strong></a><a class="genanchor" href="#96540"> &para;</a><div class="date" title="2010-03-04 12:26"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96540">
<div class="phpcode"><code><span class="html">As of php 5.3, you can use the following code to get the preferred locale of the http agent.
<br />
<br /><span class="default">&lt;?php
<br />$locale </span><span class="keyword">= </span><span class="default">Locale</span><span class="keyword">::</span><span class="default">acceptFromHttp</span><span class="keyword">(</span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'HTTP_ACCEPT_LANGUAGE'</span><span class="keyword">]);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="58310">  <div class="votes">
    <div id="Vu58310">
    <a href="/manual/vote-note.php?id=58310&amp;page=function.gettext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd58310">
    <a href="/manual/vote-note.php?id=58310&amp;page=function.gettext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V58310" title="55% like this...">
    4
    </div>
  </div>
  <a href="#58310" class="name">
  <strong class="user"><em>smerf(a)druid(d)if(d)uj(d)edu(d)pl</em></strong></a><a class="genanchor" href="#58310"> &para;</a><div class="date" title="2005-10-31 01:38"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom58310">
<div class="phpcode"><code><span class="html">Gettext translations are cached. If you change *.mo files your page may not be translated as expected. Here's simple workaround which does not require restarting webserver (I know, this is just a dirty hack):<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">initialize_i18n</span><span class="keyword">(</span><span class="default">$locale</span><span class="keyword">) {<br />    </span><span class="default">putenv</span><span class="keyword">(</span><span class="string">'LANG='</span><span class="keyword">.</span><span class="default">$locale</span><span class="keyword">);<br />    </span><span class="default">setlocale</span><span class="keyword">(</span><span class="default">LC_ALL</span><span class="keyword">,</span><span class="string">""</span><span class="keyword">);<br />    </span><span class="default">setlocale</span><span class="keyword">(</span><span class="default">LC_MESSAGES</span><span class="keyword">,</span><span class="default">$locale</span><span class="keyword">);<br />    </span><span class="default">setlocale</span><span class="keyword">(</span><span class="default">LC_CTYPE</span><span class="keyword">,</span><span class="default">$locale</span><span class="keyword">);<br />    </span><span class="default">$domains </span><span class="keyword">= </span><span class="default">glob</span><span class="keyword">(</span><span class="default">$locales_root</span><span class="keyword">.</span><span class="string">'/'</span><span class="keyword">.</span><span class="default">$locale</span><span class="keyword">.</span><span class="string">'/LC_MESSAGES/messages-*.mo'</span><span class="keyword">);<br />    </span><span class="default">$current </span><span class="keyword">= </span><span class="default">basename</span><span class="keyword">(</span><span class="default">$domains</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">],</span><span class="string">'.mo'</span><span class="keyword">);<br />    </span><span class="default">$timestamp </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'{messages-}i'</span><span class="keyword">,</span><span class="string">''</span><span class="keyword">,</span><span class="default">$current</span><span class="keyword">);<br />    </span><span class="default">bindtextdomain</span><span class="keyword">(</span><span class="default">$current</span><span class="keyword">,</span><span class="default">$locales_root</span><span class="keyword">);<br />    </span><span class="default">textdomain</span><span class="keyword">(</span><span class="default">$current</span><span class="keyword">);<br />    }<br /></span><span class="default">?&gt;<br /></span><br />to make this work you have to put your locale inside file messages-[unix_time].mo and use this name (without .mo) as your domain to fool caching mechanism (domain names differ)<br /><br />msgfmt messages.po -o messages-`date +%s`.mo<br /><br />for me this works fine (although this is not very elegant solution)</span></code></div>
  </div>
 </div>
  <div class="note" id="115276">  <div class="votes">
    <div id="Vu115276">
    <a href="/manual/vote-note.php?id=115276&amp;page=function.gettext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115276">
    <a href="/manual/vote-note.php?id=115276&amp;page=function.gettext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115276" title="58% like this...">
    2
    </div>
  </div>
  <a href="#115276" class="name">
  <strong class="user"><em>nayana at corp - gems dot com</em></strong></a><a class="genanchor" href="#115276"> &para;</a><div class="date" title="2014-06-26 11:16"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115276">
<div class="phpcode"><code><span class="html">on OSX (10.9.3) and PHP (5.4.24) you need to use full local name including codeset<br /><br />i.e. for German need to use de_DE.UTF-8 even setlocale returns success when used without .UTF-8 the lookups will not work.</span></code></div>
  </div>
 </div>
  <div class="note" id="11734">  <div class="votes">
    <div id="Vu11734">
    <a href="/manual/vote-note.php?id=11734&amp;page=function.gettext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd11734">
    <a href="/manual/vote-note.php?id=11734&amp;page=function.gettext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V11734" title="60% like this...">
    2
    </div>
  </div>
  <a href="#11734" class="name">
  <strong class="user"><em>iguy at ionsphere dot org</em></strong></a><a class="genanchor" href="#11734"> &para;</a><div class="date" title="2001-03-04 08:18"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom11734">
<div class="phpcode"><code><span class="html">Depending on the implementation of gettext used you might have to call the setlocale(LC_ALL, "") command.  
<br />So your example code would be 
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="comment">// Set language to German
<br /></span><span class="default">putenv </span><span class="keyword">(</span><span class="string">"LANG=de"</span><span class="keyword">);
<br />
<br /></span><span class="comment">// set the locale into the instance of gettext
<br /></span><span class="default">setlocale</span><span class="keyword">(</span><span class="default">LC_ALL</span><span class="keyword">, </span><span class="string">""</span><span class="keyword">);
<br />
<br /></span><span class="comment">// Specify location of translation tables
<br /></span><span class="default">bindtextdomain </span><span class="keyword">(</span><span class="string">"myPHPApp"</span><span class="keyword">, </span><span class="string">"./locale"</span><span class="keyword">);
<br />
<br /></span><span class="comment">// Choose domain
<br /></span><span class="default">textdomain </span><span class="keyword">(</span><span class="string">"myPHPApp"</span><span class="keyword">);
<br />
<br /></span><span class="comment">// Print a test message
<br /></span><span class="keyword">print (</span><span class="default">gettext </span><span class="keyword">(</span><span class="string">"Welcome to My PHP Application"</span><span class="keyword">));
<br /></span><span class="default">?&gt;
<br /></span>
<br />NOTE:  If setlocale returns NULL the LANG specified is invalid and "not supported".</span></code></div>
  </div>
 </div>
  <div class="note" id="114058">  <div class="votes">
    <div id="Vu114058">
    <a href="/manual/vote-note.php?id=114058&amp;page=function.gettext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114058">
    <a href="/manual/vote-note.php?id=114058&amp;page=function.gettext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114058" title="55% like this...">
    2
    </div>
  </div>
  <a href="#114058" class="name">
  <strong class="user"><em>jmeile at hotmail dot com</em></strong></a><a class="genanchor" href="#114058"> &para;</a><div class="date" title="2014-01-07 10:23"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114058">
<div class="phpcode"><code><span class="html">I just wanted to say that gettext won't work on WAMP Server 2.4 / 64 Bit, see the thread I posted here:<br /><br />Title: Gettext doesn't work on WAMP 64 Bits <br /><a href="http://forum.wampserver.com/read.php?2,120770,120770#msg-120770" rel="nofollow" target="_blank">http://forum.wampserver.com/read.php?2,120770,120770#msg-120770</a><br /><br />I haven't tested with only apache 64 Bit, so, I don't know if the issue is related to apache or WAMP. Anyway, to make it work with WAMP, install the 32 Bit version of WAMP and only do this:<br /><br />define('LOCALE_DIR', '&lt;root_dir_of_your_po_files&gt;'); //ie: C:/wamp/www/your_app/locale<br />$locale = '&lt;your_locale&gt;'; //ie: es_CO<br />$domain = 'your_gettext_domain'; //ie: messages<br />putenv('LC_ALL=' . $locale);<br />bindtextdomain($domain, LOCALE_DIR);<br />textdomain($domain);<br />echo _('&lt;your_string&gt;'; // ie: Hello world<br /><br />"setlocale" nor setting the LANG, LANGUAGE, and LC_MESSAGES environment variables seems to be necessary under windows. I got it working by setting "LC_ALL" only.</span></code></div>
  </div>
 </div>
  <div class="note" id="125516">  <div class="votes">
    <div id="Vu125516">
    <a href="/manual/vote-note.php?id=125516&amp;page=function.gettext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125516">
    <a href="/manual/vote-note.php?id=125516&amp;page=function.gettext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125516" title="50% like this...">
    0
    </div>
  </div>
  <a href="#125516" class="name">
  <strong class="user"><em>ck at claudiokuenzler dot com</em></strong></a><a class="genanchor" href="#125516"> &para;</a><div class="date" title="2020-11-16 12:57"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125516">
<div class="phpcode"><code><span class="html">If you come across a situation where the translation works fine on CLI but not on Apache, it may be caused by the Perl Apache module.<br /><br />Basic translate.php:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Set locale<br /></span><span class="default">putenv</span><span class="keyword">(</span><span class="string">"LC_ALL=de_CH.UTF-8"</span><span class="keyword">);<br /></span><span class="default">putenv</span><span class="keyword">(</span><span class="string">"LANGUAGE="</span><span class="keyword">);<br /></span><span class="default">putenv</span><span class="keyword">(</span><span class="string">"LANG=de_CH.UTF-8"</span><span class="keyword">);<br /></span><span class="default">$res </span><span class="keyword">= </span><span class="default">setlocale</span><span class="keyword">(</span><span class="default">LC_ALL</span><span class="keyword">, </span><span class="string">'de_CH.UTF-8'</span><span class="keyword">, </span><span class="string">'de_CH'</span><span class="keyword">, </span><span class="string">'de'</span><span class="keyword">);<br />echo </span><span class="default">bindtextdomain</span><span class="keyword">(</span><span class="string">"homepage"</span><span class="keyword">, </span><span class="string">"./locale"</span><span class="keyword">);<br /></span><span class="default">textdomain</span><span class="keyword">(</span><span class="string">"homepage"</span><span class="keyword">);<br /><br /></span><span class="default">$results </span><span class="keyword">= </span><span class="default">gettext</span><span class="keyword">(</span><span class="string">"My English Text"</span><span class="keyword">);<br />if (</span><span class="default">$results </span><span class="keyword">=== </span><span class="string">"My English Text"</span><span class="keyword">) {<br />    echo </span><span class="string">"Original English was returned. Something wrong\n"</span><span class="keyword">;<br />} else {<br />    echo </span><span class="default">$results</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />On the CLI the translation works:<br /><br />$ php7.3 translate.php<br />Mein deutscher Text.<br /><br />But not via Apache web server:<br /><br />$ curl localhost/translate.php<br />Original English was returned. Something wrong<br /><br />Disable Perl module and restart Apache:<br /><br /># a2dismod perl<br /># systemctl restart apache2<br /><br />And suddenly the translation works:<br /><br />$ curl localhost/translate.php<br />Mein deutscher Text.<br /><br />The exact reason for this behaviour is (as of right now) unknown to me.</span></code></div>
  </div>
 </div>
  <div class="note" id="21251">  <div class="votes">
    <div id="Vu21251">
    <a href="/manual/vote-note.php?id=21251&amp;page=function.gettext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd21251">
    <a href="/manual/vote-note.php?id=21251&amp;page=function.gettext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V21251" title="50% like this...">
    0
    </div>
  </div>
  <a href="#21251" class="name">
  <strong class="user"><em>jespersaNOSPAM at diku dot NO_SPAM dot dk</em></strong></a><a class="genanchor" href="#21251"> &para;</a><div class="date" title="2002-05-05 05:27"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom21251">
<div class="phpcode"><code><span class="html">There's a good tutorial to the GetText tools used with PHP at <a href="http://zez.org/article/articleview/42" rel="nofollow" target="_blank">http://zez.org/article/articleview/42</a>
<br />The only modification I needed to do was to use the correct ISO-language/country-codes (don't know the ISO number) and call setlocale. 
<br />helloworld.php:
<br />
<br /><span class="default">&lt;?php
<br />putenv</span><span class="keyword">(</span><span class="string">"LC_ALL=da_DK"</span><span class="keyword">); </span><span class="comment">// For danish/Denmark
<br /></span><span class="default">setlocale</span><span class="keyword">(</span><span class="default">LC_ALL</span><span class="keyword">, </span><span class="string">""</span><span class="keyword">);
<br />
<br /></span><span class="comment">// ./locale/da/LC_MESSAGES holds the helloworld.mo file
<br /></span><span class="default">bindtextdomain</span><span class="keyword">(</span><span class="string">"helloworld"</span><span class="keyword">, </span><span class="string">"./locale"</span><span class="keyword">);
<br /></span><span class="default">textdomain</span><span class="keyword">(</span><span class="string">"helloworld"</span><span class="keyword">);
<br />
<br />print(</span><span class="default">gettext</span><span class="keyword">(</span><span class="string">"Hello world!"</span><span class="keyword">));
<br /></span><span class="default">?&gt;
<br /></span>
<br />I had a lot of trouble getting this to work on Red Hat (Yellow Dog) Linux though.</span></code></div>
  </div>
 </div>
  <div class="note" id="129059">  <div class="votes">
    <div id="Vu129059">
    <a href="/manual/vote-note.php?id=129059&amp;page=function.gettext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129059">
    <a href="/manual/vote-note.php?id=129059&amp;page=function.gettext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129059" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#129059" class="name">
  <strong class="user"><em>naguissa at foroelectro dot net</em></strong></a><a class="genanchor" href="#129059"> &para;</a><div class="date" title="2023-11-21 06:19"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129059">
<div class="phpcode"><code><span class="html">I was testing in a self-made NAS (Debian + OpenMediaVault) and I was not getting SOME translations.<br /><br />Some translations worked OK but some others were ignored.<br /><br />The problem was caused because I had not added that locales to my NAS locale:<br /><br />1) Edit file /etc/locale.gen<br />2) Check if your locale is active (written and uncommented).<br />3) Execute "locale-gen" as root (or sudo).<br /><br />So, in short, if you have a Linux system and your translations are ignore check if you have that locale active in your system.</span></code></div>
  </div>
 </div>
  <div class="note" id="123514">  <div class="votes">
    <div id="Vu123514">
    <a href="/manual/vote-note.php?id=123514&amp;page=function.gettext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123514">
    <a href="/manual/vote-note.php?id=123514&amp;page=function.gettext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123514" title="44% like this...">
    -1
    </div>
  </div>
  <a href="#123514" class="name">
  <strong class="user"><em>saul dot dobney at notanant dot com</em></strong></a><a class="genanchor" href="#123514"> &para;</a><div class="date" title="2019-01-11 09:39"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123514">
<div class="phpcode"><code><span class="html">putenv(...) can cause hidden problems when upgrading or moving between systems which are difficult to diagnose.<br /><br />On one Linux server we had the following working perfectly with setlocale<br /><br />putenv("LANG=$locale");<br /><br />We switched servers and found gettext wouldn't work despite having all the same locale files and settings<br /><br />The recommendation to switch to<br /><br />putenv("LC_ALL=$locale");<br /><br />didn't fix the problem.<br /><br />However,<br /><br />putenv("LANGUAGE=$locale");<br /><br />did. So if you have problems, check all three settings.</span></code></div>
  </div>
 </div>
  <div class="note" id="101714">  <div class="votes">
    <div id="Vu101714">
    <a href="/manual/vote-note.php?id=101714&amp;page=function.gettext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101714">
    <a href="/manual/vote-note.php?id=101714&amp;page=function.gettext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101714" title="40% like this...">
    -2
    </div>
  </div>
  <a href="#101714" class="name">
  <strong class="user"><em>bla at taxistop dot be</em></strong></a><a class="genanchor" href="#101714"> &para;</a><div class="date" title="2011-01-06 06:47"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101714">
<div class="phpcode"><code><span class="html">For me it is sufficient to call setlocale() with a string like "nl_BE" as the second parameter, to make gettext() work. Just plain "nl" was not enough.<br /><br />Ditto when using an environment variable like LANG: "en", "fr", "nl", "de" are not enough: I have to specify the country, too.</span></code></div>
  </div>
 </div>
  <div class="note" id="108594">  <div class="votes">
    <div id="Vu108594">
    <a href="/manual/vote-note.php?id=108594&amp;page=function.gettext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108594">
    <a href="/manual/vote-note.php?id=108594&amp;page=function.gettext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108594" title="41% like this...">
    -3
    </div>
  </div>
  <a href="#108594" class="name">
  <strong class="user"><em>simen at nconel dot no</em></strong></a><a class="genanchor" href="#108594"> &para;</a><div class="date" title="2012-05-09 10:57"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108594">
<div class="phpcode"><code><span class="html">gettext returns the headers from .mo files<br />if the message parameter is set to empty.<br /><br />So if you are for example using Smarty blocks, make sure that the values given checks if the text has content or else your text will have a bunch of headers printing.<br /><br />If you are putting a variable to the gettext, like so:<br />_($text);<br />you are better of making another function like this:<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">__</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">){<br />if(empty(</span><span class="default">$text</span><span class="keyword">)) return </span><span class="string">""</span><span class="keyword">;<br />else </span><span class="default">gettext</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="56314">  <div class="votes">
    <div id="Vu56314">
    <a href="/manual/vote-note.php?id=56314&amp;page=function.gettext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56314">
    <a href="/manual/vote-note.php?id=56314&amp;page=function.gettext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56314" title="37% like this...">
    -2
    </div>
  </div>
  <a href="#56314" class="name">
  <strong class="user"><em>florent at eledo dot com</em></strong></a><a class="genanchor" href="#56314"> &para;</a><div class="date" title="2005-08-30 07:05"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56314">
<div class="phpcode"><code><span class="html">Take care when extracting the strings from the source files : if your source files are not encoded in ascii, then xgettext must be used with the --from-code option, and the generated .po file is *always* UTF-8 (even if you used a different --from-code charset). <br /><br />The usage of gettext will not work later on strings which include non ascii caracters. For make it working, you have to translate the .po file to your proper charset with msgconv.<br /><br />Example :<br />my source files are encoded in iso-8859-1<br />$ xgettext --from-code=iso-8859-1 -n *.php -o myapp.po<br />==&gt; myapp.po is in UTF-8 (and generated .mo files will not work with gettext). <br />I have to convert it to iso-8859-1 before translating :<br />$ msgconv --to-code=iso-8859-1 myapp.po -o myapp.po<br />...and now translate the file.</span></code></div>
  </div>
 </div>
  <div class="note" id="32203">  <div class="votes">
    <div id="Vu32203">
    <a href="/manual/vote-note.php?id=32203&amp;page=function.gettext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd32203">
    <a href="/manual/vote-note.php?id=32203&amp;page=function.gettext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V32203" title="33% like this...">
    -4
    </div>
  </div>
  <a href="#32203" class="name">
  <strong class="user"><em>adino at adino dot sk</em></strong></a><a class="genanchor" href="#32203"> &para;</a><div class="date" title="2003-05-20 07:23"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom32203">
<div class="phpcode"><code><span class="html">If you 're experiencing problems like gettext() is not working and you're getting translated text only occassionaly use: unset LANG before starting apache.<br />Next thing is that you have to restart apache after you 've changed .mo files because they're treated something like shared libraries.<br />I've only tested this with Linux (Sourcemage Linux distro, Mandrake) but it might be true for others as well.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.gettext&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.gettext.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.gettext.php">Gettext Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.-.php" title="_&#8203;">_&#8203;</a>
                        </li>
                                                <li class="">
                            <a href="function.bind-textdomain-codeset.php" title="bind_&#8203;textdomain_&#8203;codeset">bind_&#8203;textdomain_&#8203;codeset</a>
                        </li>
                                                <li class="">
                            <a href="function.bindtextdomain.php" title="bindtextdomain">bindtextdomain</a>
                        </li>
                                                <li class="">
                            <a href="function.dcgettext.php" title="dcgettext">dcgettext</a>
                        </li>
                                                <li class="">
                            <a href="function.dcngettext.php" title="dcngettext">dcngettext</a>
                        </li>
                                                <li class="">
                            <a href="function.dgettext.php" title="dgettext">dgettext</a>
                        </li>
                                                <li class="">
                            <a href="function.dngettext.php" title="dngettext">dngettext</a>
                        </li>
                                                <li class="current">
                            <a href="function.gettext.php" title="gettext">gettext</a>
                        </li>
                                                <li class="">
                            <a href="function.ngettext.php" title="ngettext">ngettext</a>
                        </li>
                                                <li class="">
                            <a href="function.textdomain.php" title="textdomain">textdomain</a>
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
