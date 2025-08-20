// STOCKAGE DES QUESTIONS //
const StorageQuestions = [
  // Novice //

  {
    question: "Quel est le plus ancien instrument de mesure du temps ?",
    answers: ["Le gnomon", "La montre", "Le sablier"],
    correctAnswer: 0,
    difficulty: "novice",
  },
  {
    question: "Quelle manufacture est établie à Genève ?",
    answers: ["Audemars Piguet", "Rolex", "Hublot"],
    correctAnswer: 1,
    difficulty: "novice",
  },
  {
    question: "Comment appelle-t-on l’aiguille indiquant les minutes ?",
    answers: ["Petite aiguille", "Grande aiguille", "Aiguille des heures"],
    correctAnswer: 1,
    difficulty: "novice",
  },
  {
    question: "Quelle partie de la montre protège le cadran ?",
    answers: ["Le verre", "La lunette", "Le boîtier"],
    correctAnswer: 0,
    difficulty: "novice",
  },
  {
    question:
      "Quel matériau photoluminescent moderne remplace le radium dans les montres ?",
    answers: ["Tritium", "Superacier", "Luminova"],
    correctAnswer: 2,
    difficulty: "novice",
  },

  //  Horloger //
  {
    question: "Quelle pièce permet le remontage d'une montre automatique ?",
    answers: ["Le barillet", "Le ressort spiral", "La masse oscillante"],
    correctAnswer: 2,
    difficulty: "horloger",
  },
  {
    question: "Comment les oscillations du balancier sont-elles entretenues ?",
    answers: [
      "Grâce à l'échappement",
      "Par les engrenages",
      "Par le ressort de barillet",
    ],
    correctAnswer: 0,
    difficulty: "horloger",
  },
  {
    question: "Quelle est l'utilité des rubis sur un mouvement ?",
    answers: [
      "limiter les frottements entre certains composants",
      "Décorer le mouvement",
      "Augmenter le prix de la montre",
    ],
    correctAnswer: 0,
    difficulty: "horloger",
  },
  {
    question: "Quelle complication horlogère affiche les phases de la Lune ?",
    answers: ["Quantième perpétuel", "Phase de lune", "Equation du temps"],
    correctAnswer: 1,
    difficulty: "horloger",
  },
  {
    question: "Que mesure l’indicateur de réserve de marche sur une montre ?",
    answers: ["La précision", "L’énergie restante", "La fréquence"],
    correctAnswer: 1,
    difficulty: "horloger",
  },

  //  Maître horloger //
  {
    question:
      "Quelle est la fréquence la plus courante pour un mouvement mécanique moderne ?",
    answers: [
      "18 000 alternances/heure",
      "28 800 alternances/heure",
      "36 000 alternances/heure",
    ],
    correctAnswer: 1,
    difficulty: "maitre horloger",
  },
  {
    question:
      "Quelle pièce régule la vitesse de rotation du barillet dans une montre à sonnerie ?",
    answers: ["Régulateur centrifuge", "Balancier", "Ressort spiral"],
    correctAnswer: 0,
    difficulty: "maitre horloger",
  },
  {
    question:
      "Comment appelle-t-on le mécanisme qui compense les effets de la gravité sur l'organe régulateur ?",
    answers: ["Tourbillon", "Chronographe", "Remontoir d’égalité"],
    correctAnswer: 0,
    difficulty: "maitre horloger",
  },
  {
    question:
      "Quel est le rôle du remontoir d’égalité dans une montre mécanique ?",
    answers: [
      "Délivrer une énergie constante au mouvement",
      "Remonter automatiquement la montre",
      "Améliorer l’étanchéité du boîtier",
    ],
    correctAnswer: 0,
    difficulty: "maitre horloger",
  },
  {
    question:
      "Quel élément fixe la fréquence d’oscillation dans un mouvement mécanique ?",
    answers: [
      "L'échappement à ancre suisse",
      "Le balancier spiral",
      "Le résonateur",
    ],
    correctAnswer: 1,
    difficulty: "maitre horloger",
  },
];
