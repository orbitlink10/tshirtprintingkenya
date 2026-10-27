<?php

declare(strict_types=1);

$store = __DIR__.'/../storage/app/private/pages.json';
$publicCopy = __DIR__.'/../storage/app/pages.json';
$backupSuffix = '.legacy-'.date('Ymd-His').'.bak';

foreach ([$store, $publicCopy] as $file) {
    if (is_file($file)) {
        copy($file, $file.$backupSuffix);
    }
}

$pricingBody = <<<'HTML'
<p>T-shirt printing prices in Kenya vary from one order to the next because every job combines a different garment, print, quantity and deadline. A single T-shirt with a small chest logo is not the same job as 200 event T-shirts with a large back print. Rather than publish a single "from" price that rarely matches the real order, we quote each job from the details you provide.</p>
<p>That approach takes a little more information at the start, but it gives you a quote you can compare properly. It also makes it easier to see why one quote differs from another when the garments, print sizes or quantities are not the same.</p>
<figure><img src="https://images.unsplash.com/photo-1562157873-818bc0726f68?auto=format&amp;fit=crop&amp;w=1200&amp;h=675&amp;q=80" alt="Folded plain T-shirts in red, black, white, navy, maroon and yellow" width="1200" height="675" loading="lazy" decoding="async"></figure>

<h2>What affects the price of a T-shirt printing order</h2>
<p>Several practical details shape the quotation. The list below is the starting point we use when reviewing an enquiry.</p>

<h3>Quantity and size breakdown</h3>
<p>Quantity affects how the job is prepared and produced, but it is not the only factor. A run of 20 pieces and a run of 200 pieces may use different processes or setups. The size breakdown matters too, because it affects garment availability and how the order is packed.</p>

<h3>Garment type and fabric</h3>
<p>The T-shirt itself is part of the cost. Fabric, weight, fit, colour availability and stock levels all change the price. A basic cotton T-shirt is not the same as a heavier garment or a specific brand and style. If you have a preferred garment, share it. If not, describe how the T-shirts will be used so a suitable option can be suggested.</p>

<h3>Print size and placement</h3>
<p>A small left-chest logo covers less area than a full-back print. Placement also affects how the artwork is prepared and how the T-shirt is handled during production. Tell us whether the print goes on the front, back, sleeve, chest or more than one position.</p>

<h3>Number of colours</h3>
<p>Where the print method uses colour separations, the number of colours can affect preparation and production time. Artwork with many colours, gradients or fine details may need a different approach from a simple one-colour logo. We confirm the suitable method when quoting.</p>

<h3>Artwork preparation</h3>
<p>Clean, print-ready artwork reduces setup work. If a logo needs redrawing, cleanup, colour matching or separation, that preparation can affect the quote. Send the best file you have and tell us what it will be used for. We will confirm whether it is ready or what needs to change.</p>

<h3>Finishing, collection and delivery</h3>
<p>Folding, packing, labelling and delivery are not identical for every order. If you need the T-shirts sorted by size, packed in a particular way or delivered to a specific location, include that in the enquiry. Collection and delivery arrangements are confirmed with each quote.</p>

<h3>Required date</h3>
<p>Timing affects planning. A comfortable lead time is different from a tight event deadline. We do not publish a standard turnaround because garment availability, artwork approval and quantity all change the schedule. Tell us the date you need the T-shirts and we will confirm what is possible.</p>

<h2>Why we do not publish a single price list</h2>
<p>A public price can become misleading quickly. Garment prices move, stock changes, and two orders with the same quantity can still differ because of fabric, print size and artwork. A quote built from your actual specification is more useful than a headline figure that does not match your job.</p>
<p>This is also why we ask for a size breakdown and print placement before confirming a price. Those details are not paperwork for their own sake. They are the difference between a realistic quote and an estimate that changes later.</p>

<h2>What to include in your quote request</h2>
<ul>
    <li>The quantity you need and the size breakdown.</li>
    <li>The garment style, fabric or colour, if you already know it.</li>
    <li>Where the print should sit and roughly how large it should be.</li>
    <li>Your logo, artwork or reference image.</li>
    <li>The date you need the T-shirts and your location.</li>
    <li>Any finishing, packing or delivery requirement.</li>
</ul>
<p>If you are still deciding on some of these details, send what you have. We can confirm the missing information before the quote is finalised.</p>

<h2>How to compare T-shirt printing quotes</h2>
<p>Compare the full scope, not only the total. Ask whether the quote includes the garment, the print, artwork preparation, finishing, VAT and delivery. Ask what happens if the quantity changes or if the artwork needs adjustment. A quote that looks lower may leave out an important part of the job.</p>
<p>It also helps to compare like with like. Check the garment type, print size, number of colours and delivery arrangement. If one quote is based on a different T-shirt or a smaller print, the totals are not directly comparable.</p>

<h2>Request a T-shirt printing quote</h2>
<p>Tell us what you need and we will confirm the specification, the available print option and the next steps. You can also read more about <a href="/services/bulk-t-shirt-printing">bulk T-shirt printing</a>, <a href="/services/corporate-t-shirt-branding">corporate T-shirt branding</a> or <a href="/services/event-t-shirt-printing">event T-shirt printing</a> before you send the enquiry.</p>
<p><a href="/contact">Request a personalised quote</a> when you are ready.</p>
HTML;

$servicesBody = <<<'HTML'
<p>T-Shirt Printing Kenya supports three main order types: bulk T-shirt printing, corporate T-shirt branding and event T-shirt printing. Each one is built around a different customer need, even though they share the same production process. The right starting point depends on who the T-shirts are for, how many you need and what the order is meant to achieve.</p>
<p>If you are not sure which service fits, describe the order in the quote form. We will point you to the right page and confirm the details needed for a quotation.</p>
<figure><img src="https://images.unsplash.com/photo-1489987707025-afc232f7ea0f?auto=format&amp;fit=crop&amp;w=1200&amp;h=675&amp;q=80" alt="Rack of plain T-shirts in assorted colours" width="1200" height="675" loading="lazy" decoding="async"></figure>

<h2>Bulk T-shirt printing</h2>
<p>Bulk printing is for larger runs where consistency matters: businesses, schools, organisations, campaigns, community groups and events. The focus is on the quantity, the size breakdown, garment colour and a clear print specification across the whole order.</p>
<p>Read the <a href="/services/bulk-t-shirt-printing">bulk T-shirt printing service page</a> for the preparation checklist and the ordering process.</p>

<h2>Corporate T-shirt branding</h2>
<p>Corporate branding is for businesses that want staff or promotional T-shirts to present the brand clearly. The work usually involves a logo or brand mark, a planned placement, consistent colours and a size mix that fits the people wearing the T-shirts.</p>
<p>Read the <a href="/services/corporate-t-shirt-branding">corporate T-shirt branding service page</a> for guidance on garments, artwork and distribution.</p>

<h2>Event T-shirt printing</h2>
<p>Event printing is for conferences, campaigns, school activities, fun runs, team events and group projects. The design often needs to work quickly at a distance, and the order needs to be planned around a fixed date and a clear distribution plan.</p>
<p>Read the <a href="/services/event-t-shirt-printing">event T-shirt printing service page</a> for the planning points that matter most.</p>

<h2>T-shirt printing prices</h2>
<p>Every service is quoted from the actual order details: quantity, garment, print size and placement, colours, artwork and finishing. There is no single price that fits every job. The <a href="/t-shirt-printing-prices">T-shirt printing prices page</a> explains what changes a quote and what to include in your enquiry.</p>

<h2>What every order has in common</h2>
<ul>
    <li>A brief that explains the purpose, quantity and required date.</li>
    <li>A garment and colour choice that is confirmed before production.</li>
    <li>Artwork that is checked for print readiness.</li>
    <li>Proof approval where a proof applies to the order.</li>
    <li>Collection or delivery arrangements confirmed with the quote.</li>
</ul>

<h2>Other branding services</h2>
<p>We only list services we can confirm for your order. If you are also considering embroidery, polo shirts, hoodies, caps, mugs, signage or promotional merchandise, mention it in your enquiry. We will confirm whether it is available for the job you have in mind.</p>

<h2>Not sure where to start?</h2>
<p>Send the purpose, quantity, garment preference, print placement and any artwork you have. If a detail is missing, we will ask for it before quoting. <a href="/contact">Request a T-shirt printing quote</a>.</p>
HTML;

$bulkBody = <<<'HTML'
<p>Bulk T-shirt printing is for orders where several people need the same T-shirt or a consistent set of printed T-shirts. That could be a business team, a school, an organisation, a campaign, a church group, a sports day or a community event. The common thread is that the order needs to be planned as a whole, not piece by piece.</p>
<p>A good bulk order starts with a clear brief. Quantity alone is not enough. The size breakdown, garment colour, print placement and artwork all affect how the order is prepared and quoted.</p>
<figure><img src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?auto=format&amp;fit=crop&amp;w=1200&amp;h=675&amp;q=80" alt="Green T-shirts on wooden hangers prepared for a bulk order" width="1200" height="675" loading="lazy" decoding="async"></figure>

<h2>Who bulk T-shirt printing is for</h2>
<ul>
    <li>Businesses ordering staff, team or campaign T-shirts.</li>
    <li>Schools ordering for sports days, clubs, trips or events.</li>
    <li>Organisations and community groups ordering for members.</li>
    <li>Event organisers who need a consistent T-shirt for participants or volunteers.</li>
    <li>Promotional projects where T-shirts are given away or sold as part of a campaign.</li>
</ul>

<h2>What to prepare before requesting a quote</h2>
<h3>Quantity and size breakdown</h3>
<p>Give the total quantity and the number needed in each size. If the size mix is still being collected, send your best estimate and say that it may change. A size breakdown helps confirm garment availability and keeps the order practical.</p>

<h3>Garment and colour</h3>
<p>Tell us the T-shirt style, fabric or colour you prefer. If you do not have a preferred garment, describe how the T-shirts will be used and who will wear them. That helps narrow down suitable options. If you need more than one colour, include the quantity for each colour.</p>

<h3>Artwork and print placement</h3>
<p>Send the logo or design in the best format you have. State where the print should sit and whether it appears on the front, back, sleeve or more than one position. If the artwork is not print-ready, tell us so the preparation work can be discussed before quoting.</p>

<h3>Required date and location</h3>
<p>Bulk orders need a realistic date. Share the event date or the date you need the T-shirts in hand, not only the date you plan to place the order. Also share the collection or delivery location so the arrangement can be confirmed with the quote.</p>

<h2>How the bulk order process works</h2>
<ol>
    <li>Share the design or describe the requirement, including the purpose of the T-shirts.</li>
    <li>Confirm quantities, sizes, colours, garment preferences and print placement.</li>
    <li>Receive and approve the quotation and artwork proof, where applicable.</li>
    <li>Confirm production and the collection or delivery arrangement.</li>
</ol>
<p>The process is deliberately clear. A bulk order has more details to check than a single T-shirt, so confirming them early reduces the chance of a mistake later.</p>

<h2>Keeping a bulk order consistent</h2>
<p>Consistency is the main quality issue in bulk printing. Check the spelling, logo proportions and print position before production. If the T-shirts come in different sizes, confirm that the print will sit correctly across those sizes. If the order includes more than one colour, confirm which artwork goes on which garment.</p>
<p>Where a proof applies, review it carefully before approval. A quick check of names, dates, sponsor logos and contact details can prevent a costly correction after printing.</p>

<h2>Collection and delivery</h2>
<p>Collection and delivery are confirmed with each quote. Bulk orders may need to be sorted, packed or labelled in a particular way, so mention any distribution requirement in the enquiry. If you need delivery to an event venue or multiple locations, include that detail early.</p>

<h2>Request a bulk T-shirt printing quote</h2>
<p>Send the quantity, size breakdown, garment preference, print placement, artwork and required date. If the order is tied to a date-specific event, read the <a href="/services/event-t-shirt-printing">event T-shirt printing</a> page. For staff or promotional T-shirts, see <a href="/services/corporate-t-shirt-branding">corporate T-shirt branding</a>.</p>
<p>You can also read the <a href="/t-shirt-printing-prices">T-shirt printing prices guide</a> or the <a href="/blog/how-to-plan-a-bulk-t-shirt-order">bulk order planning guide</a> before you enquire. <a href="/contact">Request a personalised bulk quote</a>.</p>
HTML;

$corporateBody = <<<'HTML'
<p>Corporate T-shirt branding is about making a business look consistent when staff, teams or promotional recipients wear its T-shirts. It can cover staff uniforms, internal team days, product launches, conferences, CSR activities and promotional giveaways. The aim is not only to put a logo on a shirt. It is to choose a garment, colour and print placement that represent the business properly.</p>
<p>Good corporate branding starts with the people who will wear the T-shirts and the setting where they will be seen. A shirt for a warehouse team has different demands from a shirt for a conference giveaway.</p>
<figure><img src="https://images.unsplash.com/photo-1618354691373-d851c5c3a990?auto=format&amp;fit=crop&amp;w=1200&amp;h=675&amp;q=80" alt="Black T-shirt with a small printed chest logo on a wooden hanger" width="1200" height="675" loading="lazy" decoding="async"></figure>

<h2>What corporate T-shirt branding is used for</h2>
<ul>
    <li>Staff uniforms and team identity.</li>
    <li>Internal launches, campaigns and team-building days.</li>
    <li>Conferences, exhibitions and customer events.</li>
    <li>Promotional giveaways and partner gifts.</li>
    <li>Community and CSR activities.</li>
</ul>

<h2>Choosing garments for staff and promotions</h2>
<p>Consider comfort, fit, fabric weight and how often the T-shirt will be worn. Staff who wear the same shirt regularly need a garment that can handle repeated washing and still look presentable. Promotional T-shirts may prioritise a lower-cost garment, but they still need to feel good enough for the recipient to wear.</p>
<p>Brand colours matter too. Not every fabric or garment range will reproduce a brand colour exactly, so confirm the closest available option before production. If the T-shirt colour is part of the brand identity, say so early.</p>

<h2>Getting the brand right</h2>
<p>Send the logo in the best quality you have, preferably a vector file if one exists. Confirm the exact colours and any rules about clear space, minimum logo size or placement. If the business has brand guidelines, share the relevant page rather than describing it from memory.</p>
<p>Check the logo on the proposed garment colour. A mark that works on white may need a different version on black or navy. The goal is a print that looks deliberate, not a logo that disappears into the fabric.</p>

<h2>Sizes and distribution</h2>
<p>Collect a size breakdown before the order is confirmed. Corporate orders often include a mix of sizes, and a missing size can leave someone without a shirt. Decide who receives the T-shirts and how they will be distributed. If you need the order sorted by department, size or name, include that in the brief.</p>

<h2>Artwork and proof approval</h2>
<p>Where a proof applies, check spelling, logo proportions, colours and placement before approving production. Corporate artwork often includes contact details, campaign names or partner logos, so a final proof review is worth the time.</p>

<h2>How corporate T-shirt branding is quoted</h2>
<p>The quote depends on the garment, quantity, size mix, print size, placement, number of colours and artwork preparation. Read the <a href="/t-shirt-printing-prices">T-shirt printing prices guide</a> for the full list of factors.</p>

<h2>Request a corporate T-shirt branding quote</h2>
<p>Tell us about the business, the people who will wear the T-shirts, the quantity, the brand colours and the required date. If you have brand guidelines or artwork, attach them to the enquiry.</p>
<p><a href="/contact">Request a corporate branding quote</a> or compare <a href="/services/bulk-t-shirt-printing">bulk T-shirt printing</a> for larger runs.</p>
HTML;

$eventBody = <<<'HTML'
<p>Event T-shirt printing is for orders tied to a date: conferences, campaigns, school events, fun runs, team activities, church events and community projects. The T-shirts often need to be ready for a specific day and distributed to a specific group of people, so planning matters as much as the design.</p>
<p>The best event T-shirt is easy to read, comfortable to wear and appropriate for the audience. It should also be ready when the event starts, which is why the required date belongs in the first conversation.</p>
<figure><img src="https://images.unsplash.com/photo-1503341504253-dff4815485f1?auto=format&amp;fit=crop&amp;w=1200&amp;h=675&amp;q=80" alt="Person wearing a printed black T-shirt outdoors" width="1200" height="675" loading="lazy" decoding="async"></figure>

<h2>Start with the event date</h2>
<p>Tell us the date the T-shirts are needed, not only the event date. If the T-shirts must be distributed the day before, or delivered to a venue, that changes the planning. We do not publish a standard turnaround because each order is different. The quote will confirm what is realistic for your quantity, garment and artwork.</p>

<h2>Design for the event, not the screen</h2>
<p>Event T-shirts are often seen from a distance. A simple, bold design usually works better than fine detail that disappears across a room. If sponsor logos are included, confirm their sizes and placement early. Check that dates, venue names and campaign messages are correct before approving the proof.</p>
<p>Consider where the T-shirt will be worn. An outdoor fun run may need a light colour that handles heat and visibility. A conference may suit a darker shirt that looks smarter with the rest of the event materials.</p>

<h2>Size mix and distribution</h2>
<p>Collect the size breakdown as early as possible. If you are ordering for participants, decide whether you will collect sizes during registration or order a spread of sizes. Plan how the T-shirts will be handed out: by name, by size, by team or by registration desk.</p>
<p>If the order needs to be packed in labelled bundles, tell us before the quote is confirmed. That is a different finishing requirement from a single bulk delivery.</p>

<h2>Artwork and proof review</h2>
<p>Send the event logo, sponsor logos and any required text. Where a proof applies, check the spelling of names, dates, venues and partner logos. Event artwork often includes more than one logo, so confirm the hierarchy and spacing before production.</p>

<h2>Collection and delivery</h2>
<p>Collection and delivery are confirmed with each quote. If the T-shirts need to reach a venue, a school or a distribution point, share the address and timing. For large events, confirm who will receive the order and how it will be checked on arrival.</p>

<h2>Request an event T-shirt printing quote</h2>
<p>Send the event date, quantity, size breakdown, design, distribution plan and delivery location. Read the <a href="/t-shirt-printing-prices">pricing guide</a> or the <a href="/blog/how-to-plan-a-bulk-t-shirt-order">bulk order planning guide</a> for more detail.</p>
<p><a href="/contact">Request an event T-shirt quote</a>.</p>
HTML;

$aboutBody = <<<'HTML'
<p>T-Shirt Printing Kenya is a Nairobi-based T-shirt printing and branding service. We help businesses, schools, organisations, event organisers and individuals turn a design or idea into printed T-shirts. The work covers bulk orders, corporate branding and event T-shirts, with each order quoted from its actual requirements.</p>
<p>We are deliberately focused on T-shirt printing. That focus keeps the conversation practical: garments, sizes, artwork, print placement, quantities and the date the T-shirts are needed.</p>
<figure><img src="https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?auto=format&amp;fit=crop&amp;w=1200&amp;h=675&amp;q=80" alt="Person wearing a plain white crew-neck T-shirt" width="1200" height="675" loading="lazy" decoding="async"></figure>

<h2>What we do</h2>
<ul>
    <li><a href="/services/bulk-t-shirt-printing">Bulk T-shirt printing</a> for teams, schools, organisations and events.</li>
    <li><a href="/services/corporate-t-shirt-branding">Corporate T-shirt branding</a> for staff and promotional T-shirts.</li>
    <li><a href="/services/event-t-shirt-printing">Event T-shirt printing</a> for campaigns, activities and group projects.</li>
</ul>

<h2>How we work</h2>
<p>Every order starts with a brief. We ask for the quantity, size breakdown, garment preference, print placement, artwork and required date. From there we confirm the quotation and the production details. Where a proof applies, it is checked before production.</p>
<p>We would rather ask a clarifying question than guess. If the artwork is not ready, the garment colour is undecided or the size mix is still being collected, say so. That helps us give a useful quote instead of an estimate that changes later.</p>

<h2>Who we work with</h2>
<p>Our customers include businesses, schools, colleges, organisations, community groups, event organisers and individuals. Some orders are small and personal. Others are larger runs that need a clear size breakdown and a distribution plan. The same principles apply: confirm the specification, check the artwork and agree the collection or delivery arrangement.</p>

<h2>Service area</h2>
<p>Orders are coordinated from Nairobi and can serve customers in other parts of Kenya. Share your location and required date in the enquiry so collection or delivery can be confirmed with your quote.</p>

<h2>What we will not claim</h2>
<p>We do not publish invented years of experience, customer counts, awards or "best in Kenya" claims. We also do not list printing methods or extra branding services until they are confirmed for the order. If you need a specific method or product, ask and we will confirm what is available.</p>

<h2>Talk to us about your order</h2>
<p>Use the <a href="/contact">quote request form</a> to tell us what you need. You can also read the <a href="/t-shirt-printing-prices">T-shirt printing prices guide</a> or browse the <a href="/services">services overview</a> first.</p>
HTML;

$contactBody = <<<'HTML'
<p>Use the quote form on this page to tell us about your T-shirt order. The more detail you share, the more accurate the quote. If you are missing a detail, send what you have and we will confirm the rest before quoting.</p>
<figure><img src="https://images.unsplash.com/photo-1583743814966-8936f5b7be1a?auto=format&amp;fit=crop&amp;w=1200&amp;h=675&amp;q=80" alt="Printed black T-shirt on a wooden hanger" width="1200" height="675" loading="lazy" decoding="async"></figure>

<h2>What to include in your enquiry</h2>
<ul>
    <li>The service you need: bulk, corporate, event or another T-shirt printing request.</li>
    <li>The quantity and, if possible, the size breakdown.</li>
    <li>The garment style, fabric or colour you prefer, if known.</li>
    <li>Where the print should sit on the T-shirt.</li>
    <li>Your logo, artwork or a reference image.</li>
    <li>The date you need the T-shirts and the collection or delivery location.</li>
</ul>

<h2>What happens after you send the form</h2>
<p>We review the enquiry and confirm any missing details. If the brief is complete, we prepare a quote from the specification. Where a proof applies, it is shared for approval before production. Collection or delivery is confirmed with the quote.</p>

<h2>Business information</h2>
<p>T-Shirt Printing Kenya is a Nairobi-based T-shirt printing and branding service. We work with customers in Nairobi and across Kenya. Collection and delivery arrangements are confirmed with each quote. Use the form on this page for the fastest response.</p>

<h2>Need help with the brief?</h2>
<p>If you are not sure which garment or print placement to choose, describe how the T-shirts will be used and who will wear them. We will confirm the options that suit the order. You can also read <a href="/blog/how-to-prepare-artwork-for-t-shirt-printing">how to prepare artwork for T-shirt printing</a> before you send the file.</p>
HTML;

$blogBody = <<<'HTML'
<p>These guides explain the practical parts of ordering printed T-shirts in Kenya: what changes a quote, how to prepare artwork, how to choose garments for a team and how to plan a bulk or event order. Each guide links to the service page or quote form that fits the next step.</p>
<figure><img src="https://images.unsplash.com/photo-1576566588028-4147f3842f27?auto=format&amp;fit=crop&amp;w=1200&amp;h=675&amp;q=80" alt="Beige T-shirt with a large blue printed graphic" width="1200" height="675" loading="lazy" decoding="async"></figure>

<h2>What affects T-shirt printing prices in Kenya?</h2>
<p>Quantity, garment choice, print size and placement, colours, artwork preparation and finishing all change the quote. This guide explains how each factor works so you can compare quotes properly.</p>
<p><a href="/blog/what-affects-t-shirt-printing-prices-in-kenya">Read the T-shirt printing prices guide</a></p>

<h2>How to prepare artwork for T-shirt printing</h2>
<p>File type, resolution, colour and placement all affect the result. This guide covers what to send, what to check and the common artwork mistakes that slow an order down.</p>
<p><a href="/blog/how-to-prepare-artwork-for-t-shirt-printing">Read the artwork preparation guide</a></p>

<h2>How to choose T-shirts for corporate branding</h2>
<p>A corporate T-shirt has to work for the people wearing it and the brand it represents. This guide covers garment choice, fit, colour, print placement and size collection.</p>
<p><a href="/blog/how-to-choose-t-shirts-for-corporate-branding">Read the corporate T-shirt guide</a></p>

<h2>How to plan a bulk T-shirt order</h2>
<p>A bulk order needs a clear size breakdown, confirmed artwork and a realistic date. This guide walks through the planning steps before you request a quote.</p>
<p><a href="/blog/how-to-plan-a-bulk-t-shirt-order">Read the bulk order planning guide</a></p>

<h2>How to care for printed T-shirts</h2>
<p>Simple washing and storage habits help printed T-shirts last longer. This guide explains what to check on the care label and how to reduce unnecessary wear on the print.</p>
<p><a href="/blog/how-to-care-for-printed-t-shirts">Read the printed T-shirt care guide</a></p>

<h2>Start with a quote</h2>
<p>If your question is about a specific order, the quickest route is the quote form. Tell us the quantity, garment, placement, artwork and required date. <a href="/contact">Request a T-shirt printing quote</a>.</p>
HTML;

$pricingArticleBody = <<<'HTML'
<p>If you are comparing T-shirt printing prices in Kenya, the first thing to understand is that a printed T-shirt is not a single product with a single price. The quote depends on the garment, the print, the quantity and the preparation behind the order. Two orders can have the same number of pieces and still cost different amounts because the T-shirts, print sizes or artwork are different.</p>
<p>This guide explains the main factors so you can prepare a useful enquiry and compare quotes fairly.</p>
<figure><img src="https://images.unsplash.com/photo-1562157873-818bc0726f68?auto=format&amp;fit=crop&amp;w=1200&amp;h=675&amp;q=80" alt="Folded plain T-shirts in six colours" width="1200" height="675" loading="lazy" decoding="async"></figure>

<h2>Quantity and size breakdown</h2>
<p>Quantity changes how an order is prepared, but it is not the only driver of price. A larger run may allow a different setup, while a small run may need more handling per piece. The size breakdown matters because it affects garment availability and packing. If you need 100 T-shirts but 60 of them are one size, that is a different order from a balanced mix.</p>
<p>Send the total quantity and the number needed in each size. If the size mix is still being collected, say so. It is better to quote from a realistic estimate than to guess silently.</p>

<h2>Garment type and fabric</h2>
<p>The T-shirt itself is a major part of the cost. Fabric, weight, fit, colour and stock availability all matter. A basic cotton T-shirt is not the same as a heavier garment or a specific branded style. Some colours may be easier to source than others.</p>
<p>If you have a preferred garment, share the details. If not, describe how the T-shirts will be used. A staff uniform that will be washed often has different requirements from a promotional giveaway.</p>

<h2>Print size and placement</h2>
<p>A small chest logo uses less print area than a full-back design. Placement affects how the artwork is prepared and how the T-shirt is handled. A print that crosses seams or wraps around the side needs more planning than a centred front print.</p>
<p>Tell us the position and approximate size. If you have a reference image showing the look you want, include it. That is often faster than describing the size in words.</p>

<h2>Number of colours and print method</h2>
<p>Where the print method uses colour separations, the number of colours can affect preparation and production time. Artwork with many colours, gradients or fine detail may need a different approach from a simple one-colour logo.</p>
<p>The suitable method is confirmed for each order based on the artwork, fabric, colours, quantity and finish. If you already know the method you want, mention it. If not, describe the result you need and ask for advice.</p>

<h2>Artwork preparation</h2>
<p>Clean, print-ready artwork reduces setup work. If a logo needs redrawing, cleanup, colour matching or separation, that preparation can affect the quote. Low-resolution images, screenshots and photos of old T-shirts may need more work than a vector file.</p>
<p>Send the best file you have and explain what it will be used for. We will confirm whether it is ready or what needs to change before production.</p>

<h2>Finishing, collection and delivery</h2>
<p>Folding, packing, labelling and delivery are not identical for every order. If the T-shirts need to be sorted by size, packed in bundles or delivered to a venue, include that in the brief. Collection and delivery arrangements are confirmed with each quote.</p>

<h2>Required date</h2>
<p>Timing affects planning. A comfortable lead time is different from a tight event deadline. We do not publish a standard turnaround because garment availability, artwork approval and quantity all change the schedule. Tell us the date you need the T-shirts and we will confirm what is possible.</p>

<h2>How to compare quotes</h2>
<p>Compare the full scope, not only the total. Ask whether the quote includes the garment, the print, artwork preparation, finishing, VAT and delivery. Check the garment type, print size and number of colours. A lower total may be based on a different specification.</p>
<p>It also helps to ask what happens if the quantity changes or if the artwork needs adjustment. A clear quote should make those assumptions visible.</p>

<h2>Request a quote</h2>
<p>Send the quantity, size breakdown, garment preference, print placement, artwork and required date. We will confirm the specification and the next steps. For a broader overview, see the <a href="/t-shirt-printing-prices">T-shirt printing prices page</a>.</p>
<p><a href="/contact">Request a personalised T-shirt printing quote</a>.</p>
HTML;

$artworkArticleBody = <<<'HTML'
<p>Good artwork makes a T-shirt order easier to quote and less likely to go wrong in production. The best file depends on the design, but the principles are consistent: clear edges, enough resolution, correct colours and a clear instruction about where the print should sit.</p>
<p>This guide explains what to send and what to check before approving a T-shirt print.</p>
<figure><img src="https://images.unsplash.com/photo-1576566588028-4147f3842f27?auto=format&amp;fit=crop&amp;w=1200&amp;h=675&amp;q=80" alt="Beige T-shirt with a large blue printed graphic" width="1200" height="675" loading="lazy" decoding="async"></figure>

<h2>Start with the best file you have</h2>
<p>A vector file is usually the most flexible starting point for a logo because it can be scaled without losing sharpness. If you do not have a vector file, send the highest-resolution version available. Avoid sending a screenshot of a logo or a photo of a printed shirt if a cleaner file exists.</p>
<p>Tell us what the artwork is for and whether it has been printed before. That context helps identify potential issues early.</p>

<h2>Resolution and file type</h2>
<p>For image-based artwork, resolution matters. A small image stretched across the back of a T-shirt will look soft or pixelated. Send the original file rather than a compressed version from a chat app. If you are unsure, send the file and ask us to check it.</p>
<p>Common file types include PDF, AI, EPS, SVG, PSD, PNG and JPG. The best choice depends on the design. A PDF or vector file is often more useful for a logo than a JPG.</p>

<h2>Colour and contrast</h2>
<p>Consider the T-shirt colour. A dark logo on a black shirt will not show clearly. A light logo on a white shirt may need a different treatment. If you have brand colours, share the colour values and any rules about which version of the logo should be used on dark or light backgrounds.</p>
<p>Where the print method uses colour separations, the number of colours matters. If the artwork has many colours or gradients, ask whether the design needs simplifying for the chosen method.</p>

<h2>Print size and placement</h2>
<p>Decide where the print should sit: front, back, left chest, sleeve or multiple positions. Give an approximate size. A small chest logo and a full-back print are different jobs even when the artwork is the same.</p>
<p>If you have a mockup or a reference T-shirt, include it. A visual reference is often clearer than a written description of placement.</p>

<h2>Proofs and approval</h2>
<p>Where a proof applies, check it carefully before approving production. Look at spelling, logo proportions, colours, placement and the size of the print relative to the garment. If the artwork includes dates, names or sponsor logos, check each one.</p>
<p>Approval is the point where the design becomes the production instruction. A few minutes of checking can prevent a correction after printing.</p>

<h2>Fonts and licensing</h2>
<p>If the design uses a specific font, confirm that it is available or that the text has been converted to outlines. If you are supplying a logo that uses a licensed font or image, make sure you have the right to use it. We can print the artwork you supply, but we cannot confirm your rights to use it.</p>

<h2>Artwork checklist</h2>
<ul>
    <li>Send the original file, not a screenshot.</li>
    <li>Include the logo or design in the highest resolution available.</li>
    <li>State the print position and approximate size.</li>
    <li>Confirm the T-shirt colour and how the artwork will contrast with it.</li>
    <li>Check spelling, dates, names and sponsor logos.</li>
    <li>Review the proof before production where one applies.</li>
</ul>

<h2>Next step</h2>
<p>Attach your artwork to the quote form and tell us what you need. If the file needs preparation, we will confirm that before quoting. Read the <a href="/services/corporate-t-shirt-branding">corporate T-shirt branding</a> page or the <a href="/t-shirt-printing-prices">pricing guide</a> for more context.</p>
<p><a href="/contact">Send your artwork with a quote request</a>.</p>
HTML;

$corporateArticleBody = <<<'HTML'
<p>Corporate T-shirts are part of how a business presents itself. They can be worn by staff, given to customers, used at events or sold as merchandise. The right T-shirt depends on the job it has to do, not only on the logo that goes on it.</p>
<p>This guide covers the practical choices: garment, fit, colour, print placement and size collection.</p>
<figure><img src="https://images.unsplash.com/photo-1618354691373-d851c5c3a990?auto=format&amp;fit=crop&amp;w=1200&amp;h=675&amp;q=80" alt="Black T-shirt with a small printed chest logo on a hanger" width="1200" height="675" loading="lazy" decoding="async"></figure>

<h2>Start with the job the T-shirt has to do</h2>
<p>A staff uniform needs to survive regular washing and look presentable in front of customers. A promotional giveaway needs to feel good enough for the recipient to wear. An event T-shirt needs to be ready for a specific date and work for a large group.</p>
<p>Write down the purpose, the audience and the setting. That short brief makes the garment conversation much easier.</p>

<h2>Fabric, weight and comfort</h2>
<p>Fabric affects comfort, durability and how the print sits. A lighter fabric may suit a promotional T-shirt, while a heavier garment may suit staff who wear the shirt often. Consider the climate, the work environment and how the T-shirt will be washed.</p>
<p>If you have a preferred garment, share it. If not, describe the use and ask for suitable options.</p>

<h2>Fit and sizes</h2>
<p>Fit matters for staff uniforms. Collect a size breakdown before confirming the order. If the T-shirts are for a team, ask whether the fit should be unisex, fitted or relaxed. A size that works for one person may not work for another.</p>
<p>If you are ordering for an event or giveaway, decide whether you will collect sizes in advance or order a spread of sizes. A clear distribution plan reduces the chance of leftovers in the wrong sizes.</p>

<h2>Colour and brand consistency</h2>
<p>Choose a garment colour that supports the brand and the logo. Check how the logo looks on that colour. A mark that works on white may need a different version on black, navy or a bright colour. If you have brand guidelines, share the relevant rules for logo colour, clear space and minimum size.</p>
<p>If the order includes more than one garment colour, confirm which logo version goes on each one.</p>

<h2>Print placement</h2>
<p>Common placements include left chest, centre front, back and sleeve. A small chest logo looks formal and subtle. A larger front or back print makes a stronger statement. Consider whether the T-shirt will be worn under a jacket, at a client meeting or at an outdoor event.</p>
<p>Where a proof applies, check the placement and size before production.</p>

<h2>Artwork and proof review</h2>
<p>Send the logo in the best format available. Vector artwork is usually more flexible, but a high-resolution image can work if the design allows. Check spelling, contact details and any campaign names. If the T-shirt includes partner logos, confirm their sizes and order of importance.</p>

<h2>Care and longevity</h2>
<p>Ask for care guidance before distributing the T-shirts. Simple habits, such as washing inside out and following the care label, help the print and garment last longer. If the T-shirts are for staff, include the care instructions in the handover.</p>

<h2>Request a corporate T-shirt quote</h2>
<p>Share the purpose, quantity, size breakdown, preferred garment, brand colours, artwork and required date. Read the <a href="/services/corporate-t-shirt-branding">corporate T-shirt branding service page</a> or the <a href="/t-shirt-printing-prices">pricing guide</a> for more detail.</p>
<p><a href="/contact">Request a corporate T-shirt quote</a>.</p>
HTML;

$bulkArticleBody = <<<'HTML'
<p>A bulk T-shirt order is easier when the details are confirmed before the quote, not after. The quantity, size breakdown, garment, artwork and date all affect the plan. This guide walks through the preparation steps so the order can move from enquiry to production without unnecessary back-and-forth.</p>
<figure><img src="https://images.unsplash.com/photo-1489987707025-afc232f7ea0f?auto=format&amp;fit=crop&amp;w=1200&amp;h=675&amp;q=80" alt="Rack of plain T-shirts in assorted colours" width="1200" height="675" loading="lazy" decoding="async"></figure>

<h2>1. Confirm the purpose and date</h2>
<p>Start with the reason for the T-shirts and the date they are needed. An event date is not always the same as the delivery date. If the T-shirts must be distributed the day before, or delivered to a venue, include that in the brief.</p>
<p>Be realistic about timing. Garment availability, artwork approval and the size of the order all affect the schedule. Ask what is possible rather than assuming a standard turnaround.</p>

<h2>2. Build the size breakdown</h2>
<p>Collect the sizes before confirming the order. If you are ordering for a team, a school or an event, decide how you will collect the information. A simple form or registration field is easier than chasing messages later.</p>
<p>If the size mix is still open, send your best estimate and say so. A quote can be updated when the final numbers are ready.</p>

<h2>3. Choose the garment and colour</h2>
<p>Decide on the T-shirt style, fabric and colour. Consider how often the T-shirts will be worn and where. A uniform for daily work has different requirements from a one-day event shirt. If you need more than one colour, include the quantity for each.</p>
<p>Check how the artwork will look on the chosen colour. A design that works on white may need adjustment on a dark garment.</p>

<h2>4. Prepare the artwork</h2>
<p>Send the original logo or design file. State the print position and approximate size. If the artwork needs cleanup or redrawing, mention it so the preparation can be included in the quote. Read the <a href="/blog/how-to-prepare-artwork-for-t-shirt-printing">artwork preparation guide</a> for a full checklist.</p>

<h2>5. Review the quote and proof</h2>
<p>Check that the quote matches the garment, quantity, print size, placement and finishing you discussed. Where a proof applies, review spelling, logo proportions, colours and placement before approving production. Confirm any distribution requirement, such as sorting by size or packing in bundles.</p>

<h2>6. Plan collection or delivery</h2>
<p>Confirm how the order will be collected or delivered. For a bulk order, decide who will receive it and how it will be checked. If the T-shirts are going to an event, confirm the venue access and timing. If they are going to an office, confirm the delivery contact.</p>

<h2>7. Check the order on arrival</h2>
<p>When the T-shirts arrive, check the quantity, sizes, colours and print against the approved details. Do this before distributing them. If something looks wrong, report it promptly with photos and the order details.</p>

<h2>Common planning mistakes</h2>
<ul>
    <li>Leaving the size breakdown until the last minute.</li>
    <li>Approving artwork without checking spelling and placement.</li>
    <li>Assuming a delivery date without confirming it with the printer.</li>
    <li>Ordering a garment colour that does not suit the logo.</li>
    <li>Forgetting to plan how the T-shirts will be distributed.</li>
</ul>

<h2>Request a bulk quote</h2>
<p>Send the quantity, sizes, garment, artwork, required date and location. Read the <a href="/services/bulk-t-shirt-printing">bulk T-shirt printing service page</a> or the <a href="/t-shirt-printing-prices">pricing guide</a> for more detail.</p>
<p><a href="/contact">Request a bulk T-shirt printing quote</a>.</p>
HTML;

$careArticleBody = <<<'HTML'
<p>Printed T-shirts last longer when they are washed and stored with a little care. The exact instructions depend on the garment and the print, so the care label and the printer's guidance should come first. This guide covers the habits that generally help.</p>
<figure><img src="https://images.unsplash.com/photo-1554568218-0f1715e72254?auto=format&amp;fit=crop&amp;w=1200&amp;h=675&amp;q=80" alt="Person wearing a printed white T-shirt" width="1200" height="675" loading="lazy" decoding="async"></figure>

<h2>Read the care label first</h2>
<p>The care label is the starting point. It tells you the fabric composition and the manufacturer's washing, drying and ironing guidance. If the label conflicts with general advice, follow the label.</p>
<p>If you received specific care instructions with your printed order, keep them. Different garments and print methods can have different requirements.</p>

<h2>Wash inside out</h2>
<p>Turning the T-shirt inside out reduces direct friction on the printed area. It also helps protect the print from other garments, zips and buttons in the wash. This is a simple habit that costs nothing.</p>

<h2>Use a gentle wash where possible</h2>
<p>Follow the care label for temperature and cycle. A gentle cycle and a mild detergent are usually kinder to both the fabric and the print. Avoid overloading the machine, because extra friction can wear the print and the garment.</p>

<h2>Avoid harsh chemicals and bleach</h2>
<p>Bleach and harsh cleaning products can damage fabric and colour. If a stain needs treatment, follow the care label and test any product on an inconspicuous area first. Do not scrub a printed area aggressively.</p>

<h2>Drying</h2>
<p>Follow the care label. Air drying is often gentler than a hot tumble dryer. If you use a dryer, use the lowest suitable setting and remove the T-shirt promptly to reduce creasing. Avoid hanging a wet T-shirt by the printed area, which can stretch it.</p>

<h2>Ironing</h2>
<p>If ironing is needed, check the care label. Iron the T-shirt inside out and avoid pressing the iron directly onto the print unless the care guidance allows it. A pressing cloth can add protection.</p>

<h2>Storage</h2>
<p>Store T-shirts clean and dry. Fold them rather than hanging heavy prints for long periods if the garment shape matters. Keep them away from damp areas, which can cause odours and mildew.</p>

<h2>When to ask the printer</h2>
<p>If you are unsure about a stain, a fabric or a print, ask before trying a strong treatment. If a T-shirt arrives with a problem, report it promptly with photos and the order details so it can be checked against the approved specification.</p>

<h2>Need more T-shirts?</h2>
<p>If you are planning a repeat order, keep the approved artwork and the garment details from the first order. That makes the next quote faster. Read the <a href="/services">T-shirt printing services overview</a> or <a href="/contact">request a quote</a>.</p>
HTML;

$pages = [
    [
        'id' => 1,
        'title' => 'T-Shirt Printing Prices in Kenya',
        'slug' => 't-shirt-printing-prices',
        'alt' => 'Folded plain T-shirts in red, black, white, navy, maroon and yellow',
        'heading_2' => 'In this guide',
        'type' => 'Page',
        'description' => $pricingBody,
        'image' => 'https://images.unsplash.com/photo-1562157873-818bc0726f68?auto=format&fit=crop&w=1200&h=675&q=80',
        'meta_title' => 'T-Shirt Printing Prices in Kenya | Request a Quote',
        'meta_description' => 'Understand what affects T-shirt printing prices in Kenya - quantity, garments, print size, colours, artwork and finishing - then request a personalised quote.',
    ],
    [
        'id' => 2,
        'title' => 'Bulk, Corporate and Event T-Shirt Printing Services',
        'slug' => 'services',
        'alt' => 'Rack of plain T-shirts in assorted colours',
        'heading_2' => 'In this guide',
        'type' => 'Page',
        'description' => $servicesBody,
        'image' => 'https://images.unsplash.com/photo-1489987707025-afc232f7ea0f?auto=format&fit=crop&w=1200&h=675&q=80',
        'meta_title' => 'Bulk, Corporate and Event T-Shirt Printing Services',
        'meta_description' => 'Compare bulk, corporate and event T-shirt printing services in Nairobi and Kenya. See what each order type covers and request a personalised quote.',
    ],
    [
        'id' => 3,
        'title' => 'Bulk T-Shirt Printing in Nairobi and Kenya',
        'slug' => 'services/bulk-t-shirt-printing',
        'alt' => 'Green T-shirts on wooden hangers prepared for a bulk order',
        'heading_2' => 'In this guide',
        'type' => 'Page',
        'description' => $bulkBody,
        'image' => 'https://images.unsplash.com/photo-1523381210434-271e8be1f52b?auto=format&fit=crop&w=1200&h=675&q=80',
        'meta_title' => 'Bulk T-Shirt Printing in Nairobi and Kenya',
        'meta_description' => 'Bulk T-shirt printing for businesses, schools, organisations and events in Nairobi and Kenya. Share your quantities, sizes and artwork for a personalised quote.',
    ],
    [
        'id' => 4,
        'title' => 'Corporate T-Shirt Branding in Nairobi',
        'slug' => 'services/corporate-t-shirt-branding',
        'alt' => 'Black T-shirt with a small printed chest logo on a wooden hanger',
        'heading_2' => 'In this guide',
        'type' => 'Page',
        'description' => $corporateBody,
        'image' => 'https://images.unsplash.com/photo-1618354691373-d851c5c3a990?auto=format&fit=crop&w=1200&h=675&q=80',
        'meta_title' => 'Corporate T-Shirt Branding in Nairobi | Request a Quote',
        'meta_description' => 'Branded staff and promotional T-shirts for Nairobi businesses. Plan garments, colours, sizes and print placement with a quote-based T-shirt branding service.',
    ],
    [
        'id' => 5,
        'title' => 'Event T-Shirt Printing in Nairobi and Kenya',
        'slug' => 'services/event-t-shirt-printing',
        'alt' => 'Person wearing a printed black T-shirt outdoors',
        'heading_2' => 'In this guide',
        'type' => 'Page',
        'description' => $eventBody,
        'image' => 'https://images.unsplash.com/photo-1503341504253-dff4815485f1?auto=format&fit=crop&w=1200&h=675&q=80',
        'meta_title' => 'Event T-Shirt Printing in Nairobi and Kenya',
        'meta_description' => 'T-shirts for events, campaigns, schools, groups and promotions in Nairobi and Kenya. Send your quantity, sizes, artwork and required date for a quote.',
    ],
    [
        'id' => 6,
        'title' => 'About T-Shirt Printing Kenya',
        'slug' => 'about',
        'alt' => 'Person wearing a plain white crew-neck T-shirt',
        'heading_2' => 'In this guide',
        'type' => 'Page',
        'description' => $aboutBody,
        'image' => 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?auto=format&fit=crop&w=1200&h=675&q=80',
        'meta_title' => 'About T-Shirt Printing Kenya | Nairobi T-Shirt Printers',
        'meta_description' => 'Learn how T-Shirt Printing Kenya approaches bulk, corporate and event T-shirt printing in Nairobi and across Kenya.',
    ],
    [
        'id' => 7,
        'title' => 'Contact T-Shirt Printing Kenya',
        'slug' => 'contact',
        'alt' => 'Printed black T-shirt on a wooden hanger',
        'heading_2' => 'In this guide',
        'type' => 'Page',
        'description' => $contactBody,
        'image' => 'https://images.unsplash.com/photo-1583743814966-8936f5b7be1a?auto=format&fit=crop&w=1200&h=675&q=80',
        'meta_title' => 'Contact T-Shirt Printing Kenya | Request a Quote',
        'meta_description' => 'Request a T-shirt printing quote in Nairobi or Kenya. Tell us your quantity, garment preferences, print placement, artwork and required date.',
    ],
    [
        'id' => 8,
        'title' => 'T-Shirt Printing Guides and Buying Advice',
        'slug' => 'blog',
        'alt' => 'Beige T-shirt with a large blue printed graphic',
        'heading_2' => 'In this guide',
        'type' => 'Page',
        'description' => $blogBody,
        'image' => 'https://images.unsplash.com/photo-1576566588028-4147f3842f27?auto=format&fit=crop&w=1200&h=675&q=80',
        'meta_title' => 'T-Shirt Printing Guides and Buying Advice | Kenya',
        'meta_description' => 'Practical guides on T-shirt printing prices, artwork preparation, garment choice, bulk orders and printed T-shirt care in Kenya.',
    ],
    [
        'id' => 9,
        'title' => 'What Affects T-Shirt Printing Prices in Kenya?',
        'slug' => 'blog/what-affects-t-shirt-printing-prices-in-kenya',
        'alt' => 'Folded plain T-shirts in six colours',
        'heading_2' => 'In this guide',
        'type' => 'Post',
        'description' => $pricingArticleBody,
        'image' => 'https://images.unsplash.com/photo-1562157873-818bc0726f68?auto=format&fit=crop&w=1200&h=675&q=80',
        'meta_title' => 'What Affects T-Shirt Printing Prices in Kenya?',
        'meta_description' => 'Learn how quantity, garments, print size, colours, artwork and finishing affect T-shirt printing prices in Kenya, and what to include in a quote request.',
    ],
    [
        'id' => 10,
        'title' => 'How to Prepare Artwork for T-Shirt Printing',
        'slug' => 'blog/how-to-prepare-artwork-for-t-shirt-printing',
        'alt' => 'Beige T-shirt with a large blue printed graphic',
        'heading_2' => 'In this guide',
        'type' => 'Post',
        'description' => $artworkArticleBody,
        'image' => 'https://images.unsplash.com/photo-1576566588028-4147f3842f27?auto=format&fit=crop&w=1200&h=675&q=80',
        'meta_title' => 'How to Prepare Artwork for T-Shirt Printing',
        'meta_description' => 'Send the right file, resolution, colours and placement for T-shirt printing. A practical checklist for logos, designs and proof approval.',
    ],
    [
        'id' => 11,
        'title' => 'How to Choose T-Shirts for Corporate Branding',
        'slug' => 'blog/how-to-choose-t-shirts-for-corporate-branding',
        'alt' => 'Black T-shirt with a small printed chest logo on a hanger',
        'heading_2' => 'In this guide',
        'type' => 'Post',
        'description' => $corporateArticleBody,
        'image' => 'https://images.unsplash.com/photo-1618354691373-d851c5c3a990?auto=format&fit=crop&w=1200&h=675&q=80',
        'meta_title' => 'How to Choose T-Shirts for Corporate Branding',
        'meta_description' => 'Choose the right garment, fit, colour, print placement and size breakdown for corporate T-shirts in Kenya.',
    ],
    [
        'id' => 12,
        'title' => 'How to Plan a Bulk T-Shirt Order',
        'slug' => 'blog/how-to-plan-a-bulk-t-shirt-order',
        'alt' => 'Rack of plain T-shirts in assorted colours',
        'heading_2' => 'In this guide',
        'type' => 'Post',
        'description' => $bulkArticleBody,
        'image' => 'https://images.unsplash.com/photo-1489987707025-afc232f7ea0f?auto=format&fit=crop&w=1200&h=675&q=80',
        'meta_title' => 'How to Plan a Bulk T-Shirt Order',
        'meta_description' => 'Plan a bulk T-shirt order with a clear size breakdown, garment choice, artwork approval, delivery date and distribution plan.',
    ],
    [
        'id' => 13,
        'title' => 'How to Care for Printed T-Shirts',
        'slug' => 'blog/how-to-care-for-printed-t-shirts',
        'alt' => 'Person wearing a printed white T-shirt',
        'heading_2' => 'In this guide',
        'type' => 'Post',
        'description' => $careArticleBody,
        'image' => 'https://images.unsplash.com/photo-1554568218-0f1715e72254?auto=format&fit=crop&w=1200&h=675&q=80',
        'meta_title' => 'How to Care for Printed T-Shirts',
        'meta_description' => 'Practical washing, drying, ironing and storage tips to help printed T-shirts last longer. Follow the care label and the printer\'s guidance first.',
    ],
];

$json = json_encode($pages, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

if ($json === false) {
    fwrite(STDERR, "Could not encode pages: ".json_last_error_msg().PHP_EOL);
    exit(1);
}

file_put_contents($store, $json);
file_put_contents($publicCopy, $json);

echo 'Wrote '.count($pages)." pages to {$store} and {$publicCopy}".PHP_EOL;
echo 'Backups use suffix: '.$backupSuffix.PHP_EOL;
