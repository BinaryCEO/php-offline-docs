<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Exception::getTraceAsString - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/exception.gettraceasstring.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/exception.gettraceasstring.php">
 <link rel="alternate" href="https://www.php.net/manual/en/exception.gettraceasstring.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.exception.php">
 <link rel="prev" href="https://www.php.net/manual/en/exception.gettrace.php">
 <link rel="next" href="https://www.php.net/manual/en/exception.tostring.php">

 <link rel="alternate" href="https://www.php.net/manual/en/exception.gettraceasstring.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/exception.gettraceasstring.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/exception.gettraceasstring.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/exception.gettraceasstring.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/exception.gettraceasstring.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/exception.gettraceasstring.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/exception.gettraceasstring.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/exception.gettraceasstring.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/exception.gettraceasstring.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/exception.gettraceasstring.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/exception.gettraceasstring.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Gets the stack trace as a string" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Exception::getTraceAsString - Manual" />
<meta name="twitter:description" content="Gets the stack trace as a string" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Exception::getTraceAsString - Manual" />
<meta itemprop="description" content="Gets the stack trace as a string" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Gets the stack trace as a string" />

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
        <a href="exception.tostring.php">
          Exception::__toString &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="exception.gettrace.php">
          &laquo; Exception::getTrace        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='reserved.exceptions.php'>Predefined Exceptions</a></li>      <li><a href='class.exception.php'>Exception</a></li>      </ul>
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
            <option value='en/exception.gettraceasstring.php' selected="selected">English</option>
            <option value='de/exception.gettraceasstring.php'>German</option>
            <option value='es/exception.gettraceasstring.php'>Spanish</option>
            <option value='fr/exception.gettraceasstring.php'>French</option>
            <option value='it/exception.gettraceasstring.php'>Italian</option>
            <option value='ja/exception.gettraceasstring.php'>Japanese</option>
            <option value='pt_BR/exception.gettraceasstring.php'>Brazilian Portuguese</option>
            <option value='ru/exception.gettraceasstring.php'>Russian</option>
            <option value='tr/exception.gettraceasstring.php'>Turkish</option>
            <option value='uk/exception.gettraceasstring.php'>Ukrainian</option>
            <option value='zh/exception.gettraceasstring.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="exception.gettraceasstring" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Exception::getTraceAsString</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">Exception::getTraceAsString</span> &mdash; <span class="dc-title">Gets the stack trace as a string</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-exception.gettraceasstring-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname"><strong>Exception::getTraceAsString</strong></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
   Returns the Exception stack trace as a string.
  </p>
 </div>

 
 <div class="refsect1 parameters" id="refsect1-exception.gettraceasstring-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>

 
 <div class="refsect1 returnvalues" id="refsect1-exception.gettraceasstring-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the Exception stack trace as a string.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-exception.gettraceasstring-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-457">
    <p><strong>Example #1 <span class="function"><strong>Exception::getTraceAsString()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">test</span><span style="color: #007700">() {<br />    throw new </span><span style="color: #0000BB">Exception</span><span style="color: #007700">;<br />}<br /><br />try {<br />    </span><span style="color: #0000BB">test</span><span style="color: #007700">();<br />} catch(</span><span style="color: #0000BB">Exception $e</span><span style="color: #007700">) {<br />    echo </span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTraceAsString</span><span style="color: #007700">();<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">#0 /home/bjori/tmp/ex.php(7): test()
#1 {main}</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-exception.gettraceasstring-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="throwable.gettraceasstring.php" class="methodname" rel="rdfs-seeAlso">Throwable::getTraceAsString()</a> - Gets the stack trace as a string</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/language/predefined/exception/gettraceasstring.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fexception.gettraceasstring%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=exception.gettraceasstring&amp;repo=en&amp;redirect=https://www.php.net/manual/en/exception.gettraceasstring.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="114980">  <div class="votes">
    <div id="Vu114980">
    <a href="/manual/vote-note.php?id=114980&amp;page=exception.gettraceasstring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114980">
    <a href="/manual/vote-note.php?id=114980&amp;page=exception.gettraceasstring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114980" title="74% like this...">
    61
    </div>
  </div>
  <a href="#114980" class="name">
  <strong class="user"><em>ernest at vogelsinger dot at</em></strong></a><a class="genanchor" href="#114980"> &para;</a><div class="date" title="2014-05-08 09:49"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114980">
<div class="phpcode"><code><span class="html">Honestly, Exception::getTraceAsString() simply sucks, listing only the called method (below, for example, on line 89 function fail2() gets called, but there's no information that you have the originator is fail1()). The fact that, in the example below, the exception gets thrown on line 78, is completely omitted from the trace and only available within the exception. Chained exceptions are not supported as well.<br /><br />Example:<br />#0 /var/htdocs/websites/sbdevel/public/index.php(70): seabird\test\C-&gt;exc()<br />#1 /var/htdocs/websites/sbdevel/public/index.php(85): seabird\test\C-&gt;doexc()<br />#2 /var/htdocs/websites/sbdevel/public/index.php(89): seabird\test\fail2()<br />#3 /var/htdocs/websites/sbdevel/public/index.php(93): seabird\test\fail1()<br />#4 {main}<br /><br />jTraceEx() provides a much better java-like stack trace that includes support for chained exceptions:<br />Exception: Thrown from class C<br /> at seabird.test.C.exc(index.php:78)<br /> at seabird.test.C.doexc(index.php:70)<br /> at seabird.test.fail2(index.php:85)<br /> at seabird.test.fail1(index.php:89)<br /> at (main)(index.php:93)<br />Caused by: Exception: Thrown from class B<br /> at seabird.test.B.exc(index.php:64)<br /> at seabird.test.C.exc(index.php:75)<br /> ... 4 more<br />Caused by: Exception: Thrown from class A<br /> at seabird.test.A.exc(index.php:46)<br /> at seabird.test.B.exc(index.php:61)<br /> ... 5 more<br /><br />(see at the end for the example code)<br /> <br /> <span class="default">&lt;?php<br /> </span><span class="comment">/**<br /> * jTraceEx() - provide a Java style exception trace<br /> * @param $exception<br /> * @param $seen      - array passed to recursive calls to accumulate trace lines already seen<br /> *                     leave as NULL when calling this function<br /> * @return array of strings, one entry per trace line<br /> */<br /></span><span class="keyword">function </span><span class="default">jTraceEx</span><span class="keyword">(</span><span class="default">$e</span><span class="keyword">, </span><span class="default">$seen</span><span class="keyword">=</span><span class="default">null</span><span class="keyword">) {<br />    </span><span class="default">$starter </span><span class="keyword">= </span><span class="default">$seen </span><span class="keyword">? </span><span class="string">'Caused by: ' </span><span class="keyword">: </span><span class="string">''</span><span class="keyword">;<br />    </span><span class="default">$result </span><span class="keyword">= array();<br />    if (!</span><span class="default">$seen</span><span class="keyword">) </span><span class="default">$seen </span><span class="keyword">= array();<br />    </span><span class="default">$trace  </span><span class="keyword">= </span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getTrace</span><span class="keyword">();<br />    </span><span class="default">$prev   </span><span class="keyword">= </span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getPrevious</span><span class="keyword">();<br />    </span><span class="default">$result</span><span class="keyword">[] = </span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">'%s%s: %s'</span><span class="keyword">, </span><span class="default">$starter</span><span class="keyword">, </span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$e</span><span class="keyword">), </span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getMessage</span><span class="keyword">());<br />    </span><span class="default">$file </span><span class="keyword">= </span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getFile</span><span class="keyword">();<br />    </span><span class="default">$line </span><span class="keyword">= </span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getLine</span><span class="keyword">();<br />    while (</span><span class="default">true</span><span class="keyword">) {<br />        </span><span class="default">$current </span><span class="keyword">= </span><span class="string">"</span><span class="default">$file</span><span class="string">:</span><span class="default">$line</span><span class="string">"</span><span class="keyword">;<br />        if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$seen</span><span class="keyword">) &amp;&amp; </span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$current</span><span class="keyword">, </span><span class="default">$seen</span><span class="keyword">)) {<br />            </span><span class="default">$result</span><span class="keyword">[] = </span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">' ... %d more'</span><span class="keyword">, </span><span class="default">count</span><span class="keyword">(</span><span class="default">$trace</span><span class="keyword">)+</span><span class="default">1</span><span class="keyword">);<br />            break;<br />        }<br />        </span><span class="default">$result</span><span class="keyword">[] = </span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">' at %s%s%s(%s%s%s)'</span><span class="keyword">,<br />                                    </span><span class="default">count</span><span class="keyword">(</span><span class="default">$trace</span><span class="keyword">) &amp;&amp; </span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="string">'class'</span><span class="keyword">, </span><span class="default">$trace</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]) ? </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'\\'</span><span class="keyword">, </span><span class="string">'.'</span><span class="keyword">, </span><span class="default">$trace</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">][</span><span class="string">'class'</span><span class="keyword">]) : </span><span class="string">''</span><span class="keyword">,<br />                                    </span><span class="default">count</span><span class="keyword">(</span><span class="default">$trace</span><span class="keyword">) &amp;&amp; </span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="string">'class'</span><span class="keyword">, </span><span class="default">$trace</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]) &amp;&amp; </span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="string">'function'</span><span class="keyword">, </span><span class="default">$trace</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]) ? </span><span class="string">'.' </span><span class="keyword">: </span><span class="string">''</span><span class="keyword">,<br />                                    </span><span class="default">count</span><span class="keyword">(</span><span class="default">$trace</span><span class="keyword">) &amp;&amp; </span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="string">'function'</span><span class="keyword">, </span><span class="default">$trace</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]) ? </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'\\'</span><span class="keyword">, </span><span class="string">'.'</span><span class="keyword">, </span><span class="default">$trace</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">][</span><span class="string">'function'</span><span class="keyword">]) : </span><span class="string">'(main)'</span><span class="keyword">,<br />                                    </span><span class="default">$line </span><span class="keyword">=== </span><span class="default">null </span><span class="keyword">? </span><span class="default">$file </span><span class="keyword">: </span><span class="default">basename</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">),<br />                                    </span><span class="default">$line </span><span class="keyword">=== </span><span class="default">null </span><span class="keyword">? </span><span class="string">'' </span><span class="keyword">: </span><span class="string">':'</span><span class="keyword">,<br />                                    </span><span class="default">$line </span><span class="keyword">=== </span><span class="default">null </span><span class="keyword">? </span><span class="string">'' </span><span class="keyword">: </span><span class="default">$line</span><span class="keyword">);<br />        if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$seen</span><span class="keyword">))<br />            </span><span class="default">$seen</span><span class="keyword">[] = </span><span class="string">"</span><span class="default">$file</span><span class="string">:</span><span class="default">$line</span><span class="string">"</span><span class="keyword">;<br />        if (!</span><span class="default">count</span><span class="keyword">(</span><span class="default">$trace</span><span class="keyword">))<br />            break;<br />        </span><span class="default">$file </span><span class="keyword">= </span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="string">'file'</span><span class="keyword">, </span><span class="default">$trace</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]) ? </span><span class="default">$trace</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">][</span><span class="string">'file'</span><span class="keyword">] : </span><span class="string">'Unknown Source'</span><span class="keyword">;<br />        </span><span class="default">$line </span><span class="keyword">= </span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="string">'file'</span><span class="keyword">, </span><span class="default">$trace</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]) &amp;&amp; </span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="string">'line'</span><span class="keyword">, </span><span class="default">$trace</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]) &amp;&amp; </span><span class="default">$trace</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">][</span><span class="string">'line'</span><span class="keyword">] ? </span><span class="default">$trace</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">][</span><span class="string">'line'</span><span class="keyword">] : </span><span class="default">null</span><span class="keyword">;<br />        </span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$trace</span><span class="keyword">);<br />    }<br />    </span><span class="default">$result </span><span class="keyword">= </span><span class="default">join</span><span class="keyword">(</span><span class="string">"\n"</span><span class="keyword">, </span><span class="default">$result</span><span class="keyword">);<br />    if (</span><span class="default">$prev</span><span class="keyword">)<br />        </span><span class="default">$result  </span><span class="keyword">.= </span><span class="string">"\n" </span><span class="keyword">. </span><span class="default">jTraceEx</span><span class="keyword">(</span><span class="default">$prev</span><span class="keyword">, </span><span class="default">$seen</span><span class="keyword">);<br /><br />    return </span><span class="default">$result</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Here's the example code:<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">A </span><span class="keyword">{<br />    public function </span><span class="default">exc</span><span class="keyword">() {<br />        throw new </span><span class="default">\Exception</span><span class="keyword">(</span><span class="string">'Thrown from class A'</span><span class="keyword">);    </span><span class="comment">// &lt;-- line 46<br />    </span><span class="keyword">}<br />}<br /><br />class </span><span class="default">B </span><span class="keyword">{<br />    public function </span><span class="default">exc</span><span class="keyword">() {<br />        try {<br />            </span><span class="default">$a </span><span class="keyword">= new </span><span class="default">A</span><span class="keyword">;<br />            </span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">exc</span><span class="keyword">();    </span><span class="comment">// &lt;-- line 61<br />        </span><span class="keyword">}<br />        catch(</span><span class="default">\Exception $e1</span><span class="keyword">) {<br />            throw new </span><span class="default">\Exception</span><span class="keyword">(</span><span class="string">'Thrown from class B'</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$e1</span><span class="keyword">);    </span><span class="comment">// &lt;-- line 64<br />        </span><span class="keyword">}<br />    }<br />}<br />class </span><span class="default">C </span><span class="keyword">{<br />    public function </span><span class="default">doexc</span><span class="keyword">() {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">exc</span><span class="keyword">();    </span><span class="comment">// &lt;-- line 70<br />    </span><span class="keyword">}<br />    public function </span><span class="default">exc</span><span class="keyword">() {<br />        try {<br />            </span><span class="default">$b </span><span class="keyword">= new </span><span class="default">B</span><span class="keyword">;<br />            </span><span class="default">$b</span><span class="keyword">-&gt;</span><span class="default">exc</span><span class="keyword">();    </span><span class="comment">// &lt;-- line 75<br />        </span><span class="keyword">}<br />        catch(</span><span class="default">\Exception $e1</span><span class="keyword">) {<br />            throw new </span><span class="default">\Exception</span><span class="keyword">(</span><span class="string">'Thrown from class C'</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$e1</span><span class="keyword">);    </span><span class="comment">// &lt;-- line 78<br />        </span><span class="keyword">}<br />    }<br />}<br /><br />function </span><span class="default">fail2</span><span class="keyword">() {<br />    </span><span class="default">$c </span><span class="keyword">= new </span><span class="default">C</span><span class="keyword">;<br />    </span><span class="default">$c</span><span class="keyword">-&gt;</span><span class="default">doexc</span><span class="keyword">();    </span><span class="comment">// &lt;-- line 85<br /></span><span class="keyword">}<br /><br />function </span><span class="default">fail1</span><span class="keyword">() {<br />    </span><span class="default">fail2</span><span class="keyword">();            </span><span class="comment">// &lt;-- line 89<br /></span><span class="keyword">}<br /><br />try {<br />    </span><span class="default">fail1</span><span class="keyword">();            </span><span class="comment">// &lt;-- line 93<br /></span><span class="keyword">}<br />catch(</span><span class="default">\Exception $e</span><span class="keyword">) {<br />    echo </span><span class="default">jTraceEx</span><span class="keyword">(</span><span class="default">$e</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="116744">  <div class="votes">
    <div id="Vu116744">
    <a href="/manual/vote-note.php?id=116744&amp;page=exception.gettraceasstring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116744">
    <a href="/manual/vote-note.php?id=116744&amp;page=exception.gettraceasstring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116744" title="57% like this...">
    5
    </div>
  </div>
  <a href="#116744" class="name">
  <strong class="user"><em>cottton at i-stats dot net</em></strong></a><a class="genanchor" href="#116744"> &para;</a><div class="date" title="2015-02-21 04:41"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116744">
<div class="phpcode"><code><span class="html">this method uses \n for new line (i expected PHP_EOL but well ...).<br />if you want to log the string as one single line use something like:<br /><span class="default">&lt;?php<br />$separator </span><span class="keyword">= </span><span class="string">', '</span><span class="keyword">;<br /></span><span class="default">$one_line </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"\n"</span><span class="keyword">, </span><span class="default">$separator</span><span class="keyword">, </span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getTraceAsString</span><span class="keyword">());<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=exception.gettraceasstring&amp;repo=en&amp;redirect=https://www.php.net/manual/en/exception.gettraceasstring.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.exception.php">Exception</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="exception.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="exception.getmessage.php" title="getMessage">getMessage</a>
                        </li>
                                                <li class="">
                            <a href="exception.getprevious.php" title="getPrevious">getPrevious</a>
                        </li>
                                                <li class="">
                            <a href="exception.getcode.php" title="getCode">getCode</a>
                        </li>
                                                <li class="">
                            <a href="exception.getfile.php" title="getFile">getFile</a>
                        </li>
                                                <li class="">
                            <a href="exception.getline.php" title="getLine">getLine</a>
                        </li>
                                                <li class="">
                            <a href="exception.gettrace.php" title="getTrace">getTrace</a>
                        </li>
                                                <li class="current">
                            <a href="exception.gettraceasstring.php" title="getTraceAsString">getTraceAsString</a>
                        </li>
                                                <li class="">
                            <a href="exception.tostring.php" title="_&#8203;_&#8203;toString">_&#8203;_&#8203;toString</a>
                        </li>
                                                <li class="">
                            <a href="exception.clone.php" title="_&#8203;_&#8203;clone">_&#8203;_&#8203;clone</a>
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
