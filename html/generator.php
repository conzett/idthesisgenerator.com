<?php
    $adj = array(
        "sustainable",
        "modular",
        "urban",
        "Nike-branded",
        "Apple-branded",
        "educational",
        "re-envisioned",
        "crowd-sourced",
        "feminine",
        "industrial",
        "electronic",
        "retro",
        "wireless",
        "usb-powered",
        "smart",
        "performance",
        "up-cycled",
        "reclaimed",
        "wrist-mounted",
        "collapsible",
        "decomposable",
        "organizational",
        "simplified",
        "terrestrial",
        "protective",
        "green",
        "interlocking",
        "light weight",
        "modern",
        "mobile",
        "portable",
        "machined",
        "hygenic",
        "collaborative",
        "recycled",
        "biodegradable",
        "aircraft grade",
        "robotic",
        "hybrid",
        "versatile",
        "all natural",
        "Swiss",
        "luxury",
        "touch screen",
        "voice activated",
        "waterproof",
        "automated",
        "networked",
        "rugged",
        "ergonomic",
        "solar-powered",
        "Bauhaus inspired",
        "blue sky"
    );

    $domain = array(
        "community",
        "geriatric",
        "education",
        "medical",
        "social media",
        "student life",
        "public transportation",
        "agriculture",
        "garden",
        "DIY",
        "time keeping",
        "lighting",
        "EMS",
        "grooming",
        "iPhone",
        "fitness",
        "composting",
        "construction",
        "way finding",
        "elderly care"            
    );

    $thing = array(
        "device",
        "toy",
        "appliance",
        "app",
        "table",
        "coffee maker",
        "seating aparatus",
        "chair",
        "transportation",
        "wiki",
        "space",
        "experience",
        "monitoring system",
        "monitor",
        "concept",
        "model",
        "writing implement",
        "book",
        "utensil",
        "equipment",
        "packaging",
        "case",
        "toothbrush",
        "power tools",
        "system",
        "garment",
        "tool",
        "structure",
        "exercise equipment",
        "gear",
        "speaker system",
        "GPS",
        "hearing aid",
        "vacuum",
        "motorcycle",
        "bicycle",
        "environment",
        "toilet brush holder",
        "toaster",
        "salt shaker",
        "signage",
        "messenger bag"
    );

    $GLOBALS['adj'] = $adj;
    $GLOBALS['domain'] = $domain;
    $GLOBALS['thing'] = $thing;

    function generate () {

        $adj = $GLOBALS['adj'];
        $domain = $GLOBALS['domain'];
        $thing = $GLOBALS['thing'];

        return $adj[rand(0,(count($adj) - 1))] . " " .
                $domain[rand(0,(count($domain) - 1))] . " " .
                $thing[rand(0,(count($thing) - 1))];
    }

?>