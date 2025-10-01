<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Collator::setStrength - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/collator.setstrength.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/collator.setstrength.php">
 <link rel="alternate" href="https://www.php.net/manual/en/collator.setstrength.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.collator.php">
 <link rel="prev" href="https://www.php.net/manual/en/collator.setattribute.php">
 <link rel="next" href="https://www.php.net/manual/en/collator.sort.php">

 <link rel="alternate" href="https://www.php.net/manual/en/collator.setstrength.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/collator.setstrength.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/collator.setstrength.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/collator.setstrength.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/collator.setstrength.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/collator.setstrength.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/collator.setstrength.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/collator.setstrength.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/collator.setstrength.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/collator.setstrength.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/collator.setstrength.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Set collation strength" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Collator::setStrength - Manual" />
<meta name="twitter:description" content="Set collation strength" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Collator::setStrength - Manual" />
<meta itemprop="description" content="Set collation strength" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Set collation strength" />

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
        <a href="collator.sort.php">
          Collator::sort &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="collator.setattribute.php">
          &laquo; Collator::setAttribute        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.international.php'>Human Language and Character Encoding Support</a></li>      <li><a href='book.intl.php'>intl</a></li>      <li><a href='class.collator.php'>Collator</a></li>      </ul>
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
            <option value='en/collator.setstrength.php' selected="selected">English</option>
            <option value='de/collator.setstrength.php'>German</option>
            <option value='es/collator.setstrength.php'>Spanish</option>
            <option value='fr/collator.setstrength.php'>French</option>
            <option value='it/collator.setstrength.php'>Italian</option>
            <option value='ja/collator.setstrength.php'>Japanese</option>
            <option value='pt_BR/collator.setstrength.php'>Brazilian Portuguese</option>
            <option value='ru/collator.setstrength.php'>Russian</option>
            <option value='tr/collator.setstrength.php'>Turkish</option>
            <option value='uk/collator.setstrength.php'>Ukrainian</option>
            <option value='zh/collator.setstrength.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="collator.setstrength" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Collator::setStrength</h1>
  <h1 class="refname">collator_set_strength</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8, PECL intl &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">Collator::setStrength</span> -- <span class="refname">collator_set_strength</span> &mdash; <span class="dc-title">Set collation strength</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-collator.setstrength-description">
  <h3 class="title">Description</h3>
  <p class="para">
   Object-oriented style
  </p>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>Collator::setStrength</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$strength</code></span>): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>

  <p class="para rdfs-comment">
   Procedural style
  </p>
  <div class="methodsynopsis dc-description"><span class="methodname"><strong>collator_set_strength</strong></span>(<span class="methodparam"><span class="type"><a href="class.collator.php" class="type Collator">Collator</a></span> <code class="parameter">$object</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$strength</code></span>): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>

  <p class="para rdfs-comment">
   The
   <a href="https://icu.unicode.org/" class="link external">&raquo;&nbsp;ICU</a>
   Collation Service supports many levels of comparison (named &quot;Levels&quot;, but
   also known as &quot;Strengths&quot;). Having these categories enables ICU to sort
   strings precisely according to local conventions. However, by allowing the
   levels to be selectively employed, searching for a string in text can be
   performed with various matching conditions.
  </p>
  <p class="para">
   <ol type="1">
    <li class="listitem">
     <p class="para"> 
      <em>Primary Level</em>:
      Typically, this is used to denote differences between base characters
      (for example, &quot;a&quot; &lt; &quot;b&quot;). It is the strongest difference. For
      example, dictionaries are divided into different sections by base
      character. This is also called the <code class="literal">level 1</code> strength.
     </p>
    </li>
    <li class="listitem">
     <p class="para"> 
      <em>Secondary Level</em>:
      Accents in the characters are considered secondary differences (for
      example, &quot;as&quot; &lt; &quot;às&quot; &lt; &quot;at&quot;). Other differences between letters
      can also be considered secondary differences, depending on the language.
      A secondary difference is ignored when there is a primary difference
      anywhere in the strings. This is also called the <code class="literal">level 2</code> strength.
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <p class="para">
        Note: In some languages (such as Danish), certain accented letters are
        considered to be separate base characters. In most languages, however,
        an accented letter only has a secondary difference from the unaccented
        version of that letter.
       </p>
      </p></blockquote>
     </p>
    </li>
    <li class="listitem">
     <p class="para"> 
      <em>Tertiary Level</em>:
      Upper and lower case differences in characters are distinguished at
      the tertiary level (for example, &quot;ao&quot; &lt; &quot;Ao&quot; &lt; &quot;aò&quot;). In addition,
      a variant of a letter differs from the base form on the tertiary level
      (such as &quot;a&quot; and &quot;𝒶&quot;). Another example is the difference between large
      and small Kana. A tertiary difference is ignored when there is a primary
      or secondary difference anywhere in the strings. This is also called the
      <code class="literal">level 3</code> strength.
     </p>
    </li>
    <li class="listitem">
     <p class="para"> 
      <em>Quaternary Level</em>:
      When punctuation is ignored (see Ignoring Punctuations ) at levels 1-3,
      an additional level can be used to distinguish words with and without
      punctuation (for example, &quot;ab&quot; &lt; &quot;a-b&quot; &lt; &quot;aB&quot;). This difference is
      ignored when there is a primary, secondary or tertiary difference. This
      is also known as the <code class="literal">level 4</code> strength. The quaternary level should only
      be used if ignoring punctuation is required or when processing Japanese
      text (see Hiragana processing).
     </p>
    </li>
    <li class="listitem">
     <p class="para"> 
      <em>Identical Level</em>:
      When all other levels are equal, the identical level is used as a
      tiebreaker. The Unicode code point values of the NFD form of each string
      are compared at this level, just in case there is no difference at
      levels 1-4. For example, Hebrew cantillation marks are only distinguished
      at this level. This level should be used sparingly, as only code point
      values differences between two strings is an extremely rare occurrence.
      Using this level substantially decreases the performance for both
      incremental comparison and sort key generation (as well as increasing
      the sort key length). It is also known as <code class="literal">level 5</code> strength.
     </p>
    </li>
   </ol>
  </p>
  <p class="para">
   For example, people may choose to ignore accents or ignore accents and case
   when searching for text. Almost all characters are distinguished by the
   first three levels, and in most locales the default value is thus Tertiary.
   However, if Alternate is set to be Shifted, then the Quaternary strength
   can be used to break ties among whitespace, punctuation, and symbols that
   would otherwise be ignored. If very fine distinctions among characters are
   required, then the Identical strength can be used (for example, Identical
   Strength distinguishes between the Mathematical Bold Small A and the
   Mathematical Italic Small A.). However, using levels higher than Tertiary
   the Identical strength result in significantly longer sort keys, and slower
   string comparison performance for equal strings.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-collator.setstrength-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">object</code></dt>
     <dd>
      <p class="para">
       <span class="classname"><a href="class.collator.php" class="classname">Collator</a></span> object.
      </p>
     </dd>
    
    
     <dt><code class="parameter">strength</code></dt>
     <dd>
      <p class="para">Strength to set.</p>
      <p class="para">
       Possible values are:
       <ul class="itemizedlist">
        <li class="listitem">
         <p class="para">
          <strong><code><a href="class.collator.php#collator.constants.primary">Collator::PRIMARY</a></code></strong>
         </p>
        </li>
        <li class="listitem">
         <p class="para">
          <strong><code><a href="class.collator.php#collator.constants.secondary">Collator::SECONDARY</a></code></strong>
         </p>
        </li>
        <li class="listitem">
         <p class="para">
          <strong><code><a href="class.collator.php#collator.constants.tertiary">Collator::TERTIARY</a></code></strong>
         </p>
        </li>
        <li class="listitem">
         <p class="para">
          <strong><code><a href="class.collator.php#collator.constants.quaternary">Collator::QUATERNARY</a></code></strong>
         </p>
        </li>
        <li class="listitem">
         <p class="para">
          <strong><code><a href="class.collator.php#collator.constants.identical">Collator::IDENTICAL</a></code></strong>
         </p>
        </li>
        <li class="listitem">
         <p class="para">
          <strong><code><a href="class.collator.php#collator.constants.default-strength">Collator::DEFAULT_STRENGTH</a></code></strong>
         </p>
        </li>
       </ul>
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-collator.setstrength-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Always returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-collator.setstrength-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2491">
    <p><strong>Example #1 <span class="function"><strong>collator_set_strength()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$arr  </span><span style="color: #007700">= array( </span><span style="color: #DD0000">'aò'</span><span style="color: #007700">, </span><span style="color: #DD0000">'Ao'</span><span style="color: #007700">, </span><span style="color: #DD0000">'ao' </span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$coll </span><span style="color: #007700">= </span><span style="color: #0000BB">collator_create</span><span style="color: #007700">( </span><span style="color: #DD0000">'en_US' </span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Sort array using default strength.<br /></span><span style="color: #0000BB">collator_sort</span><span style="color: #007700">( </span><span style="color: #0000BB">$coll</span><span style="color: #007700">, </span><span style="color: #0000BB">$arr </span><span style="color: #007700">); <br /></span><span style="color: #0000BB">var_export</span><span style="color: #007700">( </span><span style="color: #0000BB">$arr </span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Sort array using primary strength.<br /></span><span style="color: #0000BB">collator_set_strength</span><span style="color: #007700">( </span><span style="color: #0000BB">$coll</span><span style="color: #007700">, </span><span style="color: #0000BB">Collator</span><span style="color: #007700">::</span><span style="color: #0000BB">PRIMARY </span><span style="color: #007700">);<br /></span><span style="color: #0000BB">collator_sort</span><span style="color: #007700">( </span><span style="color: #0000BB">$coll</span><span style="color: #007700">, </span><span style="color: #0000BB">$arr </span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_export</span><span style="color: #007700">( </span><span style="color: #0000BB">$arr </span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">array (
  0 =&gt; &#039;ao&#039;,
  1 =&gt; &#039;Ao&#039;,
  2 =&gt; &#039;aò&#039;,
)
array (
  0 =&gt; &#039;aò&#039;,
  1 =&gt; &#039;Ao&#039;,
  2 =&gt; &#039;ao&#039;,
)</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-collator.setstrength-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><a href="class.collator.php#intl.collator-constants" class="link"><span class="classname"><a href="class.collator.php" class="classname">Collator</a></span> constants</a></li>
    <li><span class="function"><a href="collator.getstrength.php" class="function" rel="rdfs-seeAlso">collator_get_strength()</a> - Get current collation strength</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/intl/collator/set-strength.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fcollator.setstrength%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=collator.setstrength&amp;repo=en&amp;redirect=https://www.php.net/manual/en/collator.setstrength.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.collator.php">Collator</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="collator.asort.php" title="asort">asort</a>
                        </li>
                                                <li class="">
                            <a href="collator.compare.php" title="compare">compare</a>
                        </li>
                                                <li class="">
                            <a href="collator.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="collator.create.php" title="create">create</a>
                        </li>
                                                <li class="">
                            <a href="collator.getattribute.php" title="getAttribute">getAttribute</a>
                        </li>
                                                <li class="">
                            <a href="collator.geterrorcode.php" title="getErrorCode">getErrorCode</a>
                        </li>
                                                <li class="">
                            <a href="collator.geterrormessage.php" title="getErrorMessage">getErrorMessage</a>
                        </li>
                                                <li class="">
                            <a href="collator.getlocale.php" title="getLocale">getLocale</a>
                        </li>
                                                <li class="">
                            <a href="collator.getsortkey.php" title="getSortKey">getSortKey</a>
                        </li>
                                                <li class="">
                            <a href="collator.getstrength.php" title="getStrength">getStrength</a>
                        </li>
                                                <li class="">
                            <a href="collator.setattribute.php" title="setAttribute">setAttribute</a>
                        </li>
                                                <li class="current">
                            <a href="collator.setstrength.php" title="setStrength">setStrength</a>
                        </li>
                                                <li class="">
                            <a href="collator.sort.php" title="sort">sort</a>
                        </li>
                                                <li class="">
                            <a href="collator.sortwithsortkeys.php" title="sortWithSortKeys">sortWithSortKeys</a>
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
