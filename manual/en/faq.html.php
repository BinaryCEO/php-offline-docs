<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: PHP and HTML - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/faq.html.php">
 <link rel="shorturl" href="https://www.php.net/html">
 <link rel="alternate" href="https://www.php.net/html" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/faq.php">
 <link rel="prev" href="https://www.php.net/manual/en/faq.passwords.php">
 <link rel="next" href="https://www.php.net/manual/en/faq.com.php">

 <link rel="alternate" href="https://www.php.net/manual/en/faq.html.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/faq.html.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/faq.html.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/faq.html.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/faq.html.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/faq.html.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/faq.html.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/faq.html.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/faq.html.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/faq.html.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/faq.html.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="PHP and HTML" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: PHP and HTML - Manual" />
<meta name="twitter:description" content="PHP and HTML" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: PHP and HTML - Manual" />
<meta itemprop="description" content="PHP and HTML" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="PHP and HTML" />

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
        <a href="faq.com.php">
          PHP and COM &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="faq.passwords.php">
          &laquo; Password Hashing        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='faq.php'>FAQ</a></li>      </ul>
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
            <option value='en/faq.html.php' selected="selected">English</option>
            <option value='de/faq.html.php'>German</option>
            <option value='es/faq.html.php'>Spanish</option>
            <option value='fr/faq.html.php'>French</option>
            <option value='it/faq.html.php'>Italian</option>
            <option value='ja/faq.html.php'>Japanese</option>
            <option value='pt_BR/faq.html.php'>Brazilian Portuguese</option>
            <option value='ru/faq.html.php'>Russian</option>
            <option value='tr/faq.html.php'>Turkish</option>
            <option value='uk/faq.html.php'>Ukrainian</option>
            <option value='zh/faq.html.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="faq.html" class="chapter">
  <h1 class="title">PHP and HTML</h1>

  

  <p class="para">
   PHP and HTML interact a lot: PHP can generate HTML, and HTML
   can pass information to PHP.  Before reading these faqs, it&#039;s
   important you learn how to retrieve <a href="language.variables.external.php" class="link">
   variables from external sources</a>.  The manual page on
   this topic includes many examples as well.
  </p>

  <div class="qandaset"><ol class="qandaset_questions"><li><a href="#faq.html.encoding">
     
      What encoding/decoding do I need when I pass a value through a form/URL?
     
    </a></li><li><a href="#faq.html.form-image">
     
      I&#039;m trying to use an &lt;input type=&quot;image&quot;&gt; tag, but 
      the $foo.x and $foo.y variables
      aren&#039;t available.  $_GET[&#039;foo.x&#039;] isn&#039;t existing
      either.  Where are they?  
     
    </a></li><li><a href="#faq.html.arrays">
     How do I create arrays in a HTML &lt;form&gt;?
    </a></li><li><a href="#faq.html.select-multiple">
     
      How do I get all the results from a select multiple HTML tag?
     
    </a></li><li><a href="#faq.html.javascript-variable">
     
      How can I pass a variable from Javascript to PHP?
     
    </a></li></ol></div>
   <dl class="qandaentry" id="faq.html.encoding">
    <dt><strong>
     
      What encoding/decoding do I need when I pass a value through a form/URL?
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      There are several stages for which encoding is important. Assuming that
      you have a <span class="type"><a href="language.types.string.php" class="type string">string</a></span> <var class="varname">$data</var>, which contains
      the string you want to pass on in a non-encoded way, these are the
      relevant stages:
      <ul class="itemizedlist">
       <li class="listitem">
        <p class="para">
         HTML interpretation. In order to specify a random string, you
         <em>must</em> include it in double quotes, and 
         <span class="function"><a href="function.htmlspecialchars.php" class="function">htmlspecialchars()</a></span> the whole value.
        </p>
       </li>
       <li class="listitem">
        <p class="para">
         URL: A URL consists of several parts. If you want your data to be
         interpreted as one item, you <em>must</em> encode it with
         <span class="function"><a href="function.urlencode.php" class="function">urlencode()</a></span>.
        </p>
       </li>
      </ul>
     </p>
     <p class="para">
      <div class="example" id="example-5941">
       <p><strong>Example #1 A hidden HTML form element</strong></p>
        <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />    </span><span style="color: #007700">echo </span><span style="color: #DD0000">'&lt;input type="hidden" value="' </span><span style="color: #007700">. </span><span style="color: #0000BB">htmlspecialchars</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">) . </span><span style="color: #DD0000">'" /&gt;'</span><span style="color: #007700">.</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
        </div>

      </div>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <span class="simpara">
        It is wrong to <span class="function"><a href="function.urlencode.php" class="function">urlencode()</a></span>
        <var class="varname">$data</var>, because it&#039;s the browsers responsibility to
        <span class="function"><a href="function.urlencode.php" class="function">urlencode()</a></span> the data. All popular browsers do that
        correctly. Note that this will happen regardless of the method (i.e.,
        GET or POST). You&#039;ll only notice this in case of GET request though,
        because POST requests are usually hidden.
       </span>
      </p></blockquote>
      <div class="example" id="example-5942">
       <p><strong>Example #2 Data to be edited by the user</strong></p>
        <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />    </span><span style="color: #007700">echo </span><span style="color: #DD0000">"&lt;textarea name='mydata'&gt;\n"</span><span style="color: #007700">;<br />    echo </span><span style="color: #0000BB">htmlspecialchars</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">).</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />    echo </span><span style="color: #DD0000">"&lt;/textarea&gt;"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
        </div>

      </div>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <span class="simpara">
        The data is shown in the browser as intended, because the browser will
        interpret the HTML escaped symbols.
       </span>
       <span class="simpara">
        Upon submitting, either via GET or POST, the data will be urlencoded
        by the browser for transferring, and directly urldecoded by PHP. So in
        the end, you don&#039;t need to do any urlencoding/urldecoding yourself,
        everything is handled automagically.
       </span>
      </p></blockquote>
      <div class="example" id="example-5943">
       <p><strong>Example #3 In a URL</strong></p>
        <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />    </span><span style="color: #007700">echo </span><span style="color: #DD0000">'&lt;a href="' </span><span style="color: #007700">. </span><span style="color: #0000BB">htmlspecialchars</span><span style="color: #007700">(</span><span style="color: #DD0000">"/nextpage.php?stage=23&amp;data=" </span><span style="color: #007700">.<br />        </span><span style="color: #0000BB">urlencode</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">)) . </span><span style="color: #DD0000">'"&gt;'</span><span style="color: #007700">.</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
        </div>

      </div>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <span class="simpara">
        In fact you are faking a HTML GET request, therefore it&#039;s necessary to
        manually <span class="function"><a href="function.urlencode.php" class="function">urlencode()</a></span> the data.
       </span>
      </p></blockquote>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <span class="simpara">
        You need to <span class="function"><a href="function.htmlspecialchars.php" class="function">htmlspecialchars()</a></span> the whole URL, because the
        URL occurs as value of an HTML-attribute. In this case, the browser
        will first un-<span class="function"><a href="function.htmlspecialchars.php" class="function">htmlspecialchars()</a></span> the value, and then pass
        the URL on. PHP will understand the URL correctly, because you
        <span class="function"><a href="function.urlencode.php" class="function">urlencode()</a></span>d the data.
       </span>
       <span class="simpara">
        You&#039;ll notice that the <code class="literal">&amp;</code> in the URL is replaced
        by <code class="literal">&amp;amp;</code>. Although most browsers will recover
        if you forget this, this isn&#039;t always possible. So even if your URL is
        not dynamic, you <em>need</em> to
        <span class="function"><a href="function.htmlspecialchars.php" class="function">htmlspecialchars()</a></span> the URL.
       </span>
      </p></blockquote>
     </p>
     
    </dd>
   </dl>

   <dl class="qandaentry" id="faq.html.form-image">
    <dt><strong>
     
      I&#039;m trying to use an &lt;input type=&quot;image&quot;&gt; tag, but 
      the <var class="varname">$foo.x</var> and <var class="varname">$foo.y</var> variables
      aren&#039;t available.  <var class="varname"><a href="reserved.variables.get.php" class="classname">$_GET['foo.x']</a></var> isn&#039;t existing
      either.  Where are they?  
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      When submitting a form, it is possible to use an image instead of
      the standard submit button with a tag like:
      <div class="example-contents">
<div class="htmlcode"><pre class="htmlcode">&lt;input type=&quot;image&quot; src=&quot;image.gif&quot; name=&quot;foo&quot; /&gt;</pre>
</div>
      </div>

      When the user clicks somewhere on the image, the accompanying form
      will be transmitted to the server with two additional variables:
      <var class="varname">foo.x</var> and <var class="varname">foo.y</var>.
     </p>
     <p class="para">
      Because <var class="varname">foo.x</var> and <var class="varname">foo.y</var> would
      make invalid variable names in PHP, they are automagically converted to
      <var class="varname">foo_x</var> and <var class="varname">foo_y</var>. That is, the
      periods are replaced with underscores.  So, you&#039;d access these variables
      like any other described within the section on retrieving 
      <a href="language.variables.external.php" class="link">variables from external 
      sources</a>.  For example, <var class="varname"><a href="reserved.variables.get.php" class="classname">$_GET['foo_x']</a></var>.
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <p class="para">
         Spaces in request variable names are converted to underscores.
       </p>
      </p></blockquote>
     </p>
    </dd>
   </dl>

   <dl class="qandaentry" id="faq.html.arrays">
    <dt><strong>
     How do I create arrays in a HTML &lt;form&gt;?
    </strong></dt>
    <dd class="answer">
     <p class="para">
      To get your &lt;form&gt; result sent as an 
      <a href="language.types.array.php" class="link">array</a> to your PHP script
      you name the &lt;input&gt;, &lt;select&gt; or &lt;textarea&gt;
      elements like this:
      <div class="example-contents">
<div class="htmlcode"><pre class="htmlcode">&lt;input name=&quot;MyArray[]&quot; /&gt;
&lt;input name=&quot;MyArray[]&quot; /&gt;
&lt;input name=&quot;MyArray[]&quot; /&gt;
&lt;input name=&quot;MyArray[]&quot; /&gt;</pre>
</div>
      </div>

      Notice the square brackets after the variable name, that&#039;s what
      makes it an array. You can group the elements into different arrays
      by assigning the same name to different elements:
      <div class="example-contents">
<div class="htmlcode"><pre class="htmlcode">&lt;input name=&quot;MyArray[]&quot; /&gt;
&lt;input name=&quot;MyArray[]&quot; /&gt;
&lt;input name=&quot;MyOtherArray[]&quot; /&gt;
&lt;input name=&quot;MyOtherArray[]&quot; /&gt;</pre>
</div>
      </div>

      This produces two arrays, MyArray and MyOtherArray, that gets sent
      to the PHP script.  It&#039;s also possible to assign specific keys
      to your arrays:
      <div class="example-contents">
<div class="htmlcode"><pre class="htmlcode">&lt;input name=&quot;AnotherArray[]&quot; /&gt;
&lt;input name=&quot;AnotherArray[]&quot; /&gt;
&lt;input name=&quot;AnotherArray[email]&quot; /&gt;
&lt;input name=&quot;AnotherArray[phone]&quot; /&gt;</pre>
</div>
      </div>

      The AnotherArray array will now contain the keys 0, 1, email and phone.
      </p>
      <p class="para">
       <blockquote class="note"><p><strong class="note">Note</strong>: 
        <p class="para">
         Specifying array keys is optional in HTML.  If you do not specify
         the keys, the array gets filled in the order the elements appear in
         the form.  Our first example will contain keys 0, 1, 2 and 3.
        </p>
       </p></blockquote>
      </p>
      <p class="para">
      See also
      <a href="ref.array.php" class="link">Array Functions</a> and
      <a href="language.variables.external.php" class="link">Variables From External
      Sources</a>.
     </p>
    </dd>
   </dl>

   <dl class="qandaentry" id="faq.html.select-multiple">
    <dt><strong>
     
      How do I get all the results from a select multiple HTML tag?
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      The select multiple tag in an HTML construct allows users to
      select multiple items from a list. These items are then passed
      to the action handler for the form. The problem is that they
      are all passed with the same widget name. I.e.
      <div class="example-contents">
<div class="htmlcode"><pre class="htmlcode">&lt;select name=&quot;var&quot; multiple=&quot;yes&quot;&gt;</pre>
</div>
      </div>

      Each selected option will arrive at the action handler as:
      <div class="example-contents"><div class="cdata"><pre>
var=option1
var=option2
var=option3
      </pre></div></div>

      Each option will overwrite the contents of the previous
      <var class="varname">$var</var> variable. The solution is to use
      PHP&#039;s &quot;array from form element&quot; feature. The following
      should be used:
      <div class="example-contents">
<div class="htmlcode"><pre class="htmlcode">&lt;select name=&quot;var[]&quot; multiple=&quot;yes&quot;&gt;</pre>
</div>
      </div>

      This tells PHP to treat <var class="varname">$var</var> as an array and
      each assignment of a value to var[] adds an item to the array.
      The first item becomes <var class="varname">$var[0]</var>, the next
      <var class="varname">$var[1]</var>, etc. The <span class="function"><a href="function.count.php" class="function">count()</a></span>
      function can be used to determine how many options were selected,
      and the <span class="function"><a href="function.sort.php" class="function">sort()</a></span> function can be used to sort
      the option array if necessary.
     </p>
     <p class="para">
      Note that if you are using JavaScript the <code class="literal">[]</code>
      on the element name might cause you problems when you try to
      refer to the element by name. Use it&#039;s numerical form element
      ID instead, or enclose the variable name in single quotes and
      use that as the index to the elements array, for example:
      <div class="example-contents"><div class="cdata"><pre>
variable = document.forms[0].elements[&#039;var[]&#039;];
      </pre></div></div>

     </p>
    </dd>
   </dl>

   <dl class="qandaentry" id="faq.html.javascript-variable">
    <dt><strong>
     
      How can I pass a variable from Javascript to PHP?
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      Since Javascript is (usually) a client-side technology, and
      PHP is (usually) a server-side technology, and since HTTP is a
      &quot;stateless&quot; protocol, the two languages cannot directly share
      variables.
     </p>
     <p class="para">
      It is, however, possible to pass variables between the two.
      One way of accomplishing this is to generate Javascript code
      with PHP, and have the browser refresh itself, passing specific
      variables back to the PHP script. The example below shows
      precisely how to do this -- it allows PHP code to capture screen
      height and width, something that is normally only possible on
      the client side.
     </p>
     <p class="para">
      <div class="example" id="example-5944">
       <p><strong>Example #4 Generating Javascript with PHP</strong></p>
       <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">if (isset(</span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #DD0000">'width'</span><span style="color: #007700">]) AND isset(</span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #DD0000">'height'</span><span style="color: #007700">])) {<br />  </span><span style="color: #FF8000">// output the geometry variables<br />  </span><span style="color: #007700">echo </span><span style="color: #DD0000">"Screen width is: "</span><span style="color: #007700">. </span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #DD0000">'width'</span><span style="color: #007700">] .</span><span style="color: #DD0000">"&lt;br /&gt;\n"</span><span style="color: #007700">;<br />  echo </span><span style="color: #DD0000">"Screen height is: "</span><span style="color: #007700">. </span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #DD0000">'height'</span><span style="color: #007700">] .</span><span style="color: #DD0000">"&lt;br /&gt;\n"</span><span style="color: #007700">;<br />} else {<br />  </span><span style="color: #FF8000">// pass the geometry variables<br />  // (preserve the original query string<br />  //   -- post variables will need to handled differently)<br /><br />  </span><span style="color: #007700">echo </span><span style="color: #DD0000">"&lt;script language='javascript'&gt;\n"</span><span style="color: #007700">;<br />  echo </span><span style="color: #DD0000">"  location.href=\"</span><span style="color: #007700">{</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'SCRIPT_NAME'</span><span style="color: #007700">]}</span><span style="color: #DD0000">?</span><span style="color: #007700">{</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'QUERY_STRING'</span><span style="color: #007700">]}</span><span style="color: #DD0000">"<br />            </span><span style="color: #007700">. </span><span style="color: #DD0000">"&amp;width=\" + screen.width + \"&amp;height=\" + screen.height;\n"</span><span style="color: #007700">;<br />  echo </span><span style="color: #DD0000">"&lt;/script&gt;\n"</span><span style="color: #007700">;<br />  exit();<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
       </div>

      </div>
     </p>
    </dd>
   </dl>

  
 </div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/faq/html.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffaq.html%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=faq.html&amp;repo=en&amp;redirect=https://www.php.net/manual/en/faq.html.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="faq.php">FAQ</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="faq.general.php" title="General Information">General Information</a>
                        </li>
                                                <li class="">
                            <a href="faq.mailinglist.php" title="Mailing lists">Mailing lists</a>
                        </li>
                                                <li class="">
                            <a href="faq.obtaining.php" title="Obtaining PHP">Obtaining PHP</a>
                        </li>
                                                <li class="">
                            <a href="faq.databases.php" title="Database issues">Database issues</a>
                        </li>
                                                <li class="">
                            <a href="faq.installation.php" title="Installation">Installation</a>
                        </li>
                                                <li class="">
                            <a href="faq.build.php" title="Build Problems">Build Problems</a>
                        </li>
                                                <li class="">
                            <a href="faq.using.php" title="Using PHP">Using PHP</a>
                        </li>
                                                <li class="">
                            <a href="faq.passwords.php" title="Password Hashing">Password Hashing</a>
                        </li>
                                                <li class="current">
                            <a href="faq.html.php" title="PHP and HTML">PHP and HTML</a>
                        </li>
                                                <li class="">
                            <a href="faq.com.php" title="PHP and COM">PHP and COM</a>
                        </li>
                                                <li class="">
                            <a href="faq.misc.php" title="Miscellaneous Questions">Miscellaneous Questions</a>
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
