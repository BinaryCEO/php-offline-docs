<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: SeasLog::emergency - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/seaslog.emergency.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/seaslog.emergency.php">
 <link rel="alternate" href="https://www.php.net/manual/en/seaslog.emergency.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.seaslog.php">
 <link rel="prev" href="https://www.php.net/manual/en/seaslog.destruct.php">
 <link rel="next" href="https://www.php.net/manual/en/seaslog.error.php">

 <link rel="alternate" href="https://www.php.net/manual/en/seaslog.emergency.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/seaslog.emergency.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/seaslog.emergency.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/seaslog.emergency.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/seaslog.emergency.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/seaslog.emergency.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/seaslog.emergency.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/seaslog.emergency.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/seaslog.emergency.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/seaslog.emergency.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/seaslog.emergency.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Record emergency log information" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: SeasLog::emergency - Manual" />
<meta name="twitter:description" content="Record emergency log information" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: SeasLog::emergency - Manual" />
<meta itemprop="description" content="Record emergency log information" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Record emergency log information" />

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
        <a href="seaslog.error.php">
          SeasLog::error &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="seaslog.destruct.php">
          &laquo; SeasLog::__destruct        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.other.php'>Other Basic Extensions</a></li>      <li><a href='book.seaslog.php'>Seaslog</a></li>      <li><a href='class.seaslog.php'>SeasLog</a></li>      </ul>
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
            <option value='en/seaslog.emergency.php' selected="selected">English</option>
            <option value='de/seaslog.emergency.php'>German</option>
            <option value='es/seaslog.emergency.php'>Spanish</option>
            <option value='fr/seaslog.emergency.php'>French</option>
            <option value='it/seaslog.emergency.php'>Italian</option>
            <option value='ja/seaslog.emergency.php'>Japanese</option>
            <option value='pt_BR/seaslog.emergency.php'>Brazilian Portuguese</option>
            <option value='ru/seaslog.emergency.php'>Russian</option>
            <option value='tr/seaslog.emergency.php'>Turkish</option>
            <option value='uk/seaslog.emergency.php'>Ukrainian</option>
            <option value='zh/seaslog.emergency.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="seaslog.emergency" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">SeasLog::emergency</h1>
  <p class="verinfo">(PECL seaslog &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">SeasLog::emergency</span> &mdash; <span class="dc-title">Record emergency log information</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-seaslog.emergency-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><strong>SeasLog::emergency</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$message</code></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$content</code><span class="initializer"> = ?</span></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$logger</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
    Record emergency log information.
    <blockquote class="note"><p><strong class="note">Note</strong>: 
      <p class="para">
        &quot;EMERGENCY&quot; - System is unusable.
      </p>
    </p></blockquote>
  </p>

 </div>


 <div class="refsect1 parameters" id="refsect1-seaslog.emergency-parameters">
  <h3 class="title">Parameters</h3>
  <dl>
    
    <dt><code class="parameter">message</code></dt>
    <dd>
     <p class="para">
      The log message.
     </p>
    </dd>
   
   
    <dt><code class="parameter">content</code></dt>
    <dd>
     <p class="para">
      The `message` contain placeholders which implementors replace with values from content array.
      Sush as `message` is `log info  from {NAME}` and `content` is `array(&#039;NAME&#039; =&gt; neeke)`,
      the log information will `log info from neeke`.
     </p>
    </dd>
   
   
    <dt><code class="parameter">logger</code></dt>
    <dd>
     <p class="para">
      The `logger` cased by the third param would be used right this right now, 
      like a temp logger, when the function SeasLog::setLogger() called in pre content.
      If `logger` NULL or &quot;&quot;, SeasLog will use lastest logger setted by <span class="methodname"><a href="seaslog.setlogger.php" class="methodname">SeasLog::setLogger()</a></span>. 
     </p>
    </dd>
   
  </dl>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-seaslog.emergency-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Return TRUE on record log information success, FALSE on failure.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-seaslog.emergency-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-3825">
   <p><strong>Example #1 <span class="function"><strong>SeasLog::emergency()</strong></span> example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">SeasLog</span><span style="color: #007700">::</span><span style="color: #0000BB">emergency</span><span style="color: #007700">(</span><span style="color: #DD0000">'log message'</span><span style="color: #007700">));<br /><br /></span><span style="color: #FF8000">//with content<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">SeasLog</span><span style="color: #007700">::</span><span style="color: #0000BB">emergency</span><span style="color: #007700">(</span><span style="color: #DD0000">'log message from {NAME}'</span><span style="color: #007700">,array(</span><span style="color: #DD0000">'NAME' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'neeke'</span><span style="color: #007700">)));<br /><br /></span><span style="color: #FF8000">//with tmp logger<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">SeasLog</span><span style="color: #007700">::</span><span style="color: #0000BB">emergency</span><span style="color: #007700">(</span><span style="color: #DD0000">'log message from {NAME}'</span><span style="color: #007700">,array(</span><span style="color: #DD0000">'NAME' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'neeke'</span><span style="color: #007700">),</span><span style="color: #DD0000">'tmp_logger'</span><span style="color: #007700">));<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">SeasLog</span><span style="color: #007700">::</span><span style="color: #0000BB">getBuffer</span><span style="color: #007700">());<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output
something similar to:</p></div>
   <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">bool(true)
bool(true)
bool(true)
array(2) {
  [&quot;/var/log/www/default/20180707.log&quot;]=&gt;
  array(2) {
    [0]=&gt;
    string(81) &quot;2018-07-07 11:45:49 | EMERGENCY | 73263 | 5b40376d1067c | 1530935149.68 | log message
&quot;
    [1]=&gt;
    string(92) &quot;2018-07-07 11:45:49 | EMERGENCY | 73263 | 5b40376d1067c | 1530935149.68 | log message from neeke
&quot;
  }
  [&quot;/var/log/www/tmp_logger/20180707.log&quot;]=&gt;
  array(1) {
    [0]=&gt;
    string(92) &quot;2018-07-07 11:45:49 | EMERGENCY | 73263 | 5b40376d1067c | 1530935149.68 | log message from neeke
&quot;
  }
}</pre>
</div>
   </div>
  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-seaslog.emergency-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><a href="seaslog.configuration.php#ini.seaslog.default-template" class="link">seaslog.default_template</a></li>
   <li><span class="methodname"><a href="seaslog.debug.php" class="methodname" rel="rdfs-seeAlso">SeasLog::debug()</a> - Record debug log information</span></li>
   <li><span class="methodname"><a href="seaslog.info.php" class="methodname" rel="rdfs-seeAlso">SeasLog::info()</a> - Record info log information</span></li>
   <li><span class="methodname"><a href="seaslog.notice.php" class="methodname" rel="rdfs-seeAlso">SeasLog::notice()</a> - Record notice log information</span></li>
   <li><span class="methodname"><a href="seaslog.warning.php" class="methodname" rel="rdfs-seeAlso">SeasLog::warning()</a> - Record warning log information</span></li>
   <li><span class="methodname"><a href="seaslog.error.php" class="methodname" rel="rdfs-seeAlso">SeasLog::error()</a> - Record error log information</span></li>
   <li><span class="methodname"><a href="seaslog.critical.php" class="methodname" rel="rdfs-seeAlso">SeasLog::critical()</a> - Record critical log information</span></li>
   <li><span class="methodname"><a href="seaslog.alert.php" class="methodname" rel="rdfs-seeAlso">SeasLog::alert()</a> - Record alert log information</span></li>
   <li><span class="methodname"><a href="seaslog.log.php" class="methodname" rel="rdfs-seeAlso">SeasLog::log()</a> - The Common Record Log Function</span></li>
  </ul>
 </div>



</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/seaslog/seaslog/emergency.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fseaslog.emergency%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=seaslog.emergency&amp;repo=en&amp;redirect=https://www.php.net/manual/en/seaslog.emergency.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.seaslog.php">SeasLog</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="seaslog.alert.php" title="alert">alert</a>
                        </li>
                                                <li class="">
                            <a href="seaslog.analyzercount.php" title="analyzerCount">analyzerCount</a>
                        </li>
                                                <li class="">
                            <a href="seaslog.analyzerdetail.php" title="analyzerDetail">analyzerDetail</a>
                        </li>
                                                <li class="">
                            <a href="seaslog.closeloggerstream.php" title="closeLoggerStream">closeLoggerStream</a>
                        </li>
                                                <li class="">
                            <a href="seaslog.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="seaslog.critical.php" title="critical">critical</a>
                        </li>
                                                <li class="">
                            <a href="seaslog.debug.php" title="debug">debug</a>
                        </li>
                                                <li class="">
                            <a href="seaslog.destruct.php" title="_&#8203;_&#8203;destruct">_&#8203;_&#8203;destruct</a>
                        </li>
                                                <li class="current">
                            <a href="seaslog.emergency.php" title="emergency">emergency</a>
                        </li>
                                                <li class="">
                            <a href="seaslog.error.php" title="error">error</a>
                        </li>
                                                <li class="">
                            <a href="seaslog.flushbuffer.php" title="flushBuffer">flushBuffer</a>
                        </li>
                                                <li class="">
                            <a href="seaslog.getbasepath.php" title="getBasePath">getBasePath</a>
                        </li>
                                                <li class="">
                            <a href="seaslog.getbuffer.php" title="getBuffer">getBuffer</a>
                        </li>
                                                <li class="">
                            <a href="seaslog.getbufferenabled.php" title="getBufferEnabled">getBufferEnabled</a>
                        </li>
                                                <li class="">
                            <a href="seaslog.getdatetimeformat.php" title="getDatetimeFormat">getDatetimeFormat</a>
                        </li>
                                                <li class="">
                            <a href="seaslog.getlastlogger.php" title="getLastLogger">getLastLogger</a>
                        </li>
                                                <li class="">
                            <a href="seaslog.getrequestid.php" title="getRequestID">getRequestID</a>
                        </li>
                                                <li class="">
                            <a href="seaslog.getrequestvariable.php" title="getRequestVariable">getRequestVariable</a>
                        </li>
                                                <li class="">
                            <a href="seaslog.info.php" title="info">info</a>
                        </li>
                                                <li class="">
                            <a href="seaslog.log.php" title="log">log</a>
                        </li>
                                                <li class="">
                            <a href="seaslog.notice.php" title="notice">notice</a>
                        </li>
                                                <li class="">
                            <a href="seaslog.setbasepath.php" title="setBasePath">setBasePath</a>
                        </li>
                                                <li class="">
                            <a href="seaslog.setdatetimeformat.php" title="setDatetimeFormat">setDatetimeFormat</a>
                        </li>
                                                <li class="">
                            <a href="seaslog.setlogger.php" title="setLogger">setLogger</a>
                        </li>
                                                <li class="">
                            <a href="seaslog.setrequestid.php" title="setRequestID">setRequestID</a>
                        </li>
                                                <li class="">
                            <a href="seaslog.setrequestvariable.php" title="setRequestVariable">setRequestVariable</a>
                        </li>
                                                <li class="">
                            <a href="seaslog.warning.php" title="warning">warning</a>
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
