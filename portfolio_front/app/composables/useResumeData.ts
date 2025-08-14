export interface SkillCategory {
  title: string;
  items: string[];
}

export interface LanguageItem {
  name: string;
  level: string;
}

export interface ExperienceItem {
  from: string;
  to: string;
  company: string;
  position: string;
  description: string;
  stack: string[];
  notable: string[];
}

export interface HobbyItem {
  name: string;
  icon: string; // absolute path from public/
}

export function useResumeData() {
  const skills: SkillCategory[] = [
    {
      title: 'Backend',
      items: ['PHP (Laravel, MODX, Fenom)', 'REST API', 'PostgreSQL', 'MySQL']
    },
    {
      title: 'Frontend',
      items: ['Nuxt.js', 'JavaScript (Vanilla)', 'HTML', 'SCSS', 'CSS', 'Gulp', 'Figma', 'BEM']
    },
    {
      title: 'DevOps',
      items: ['Git', 'FTP', 'SSH', 'Apache', 'Docker', 'CI/CD']
    }
  ];

  const languages: LanguageItem[] = [
    { name: 'English', level: 'A2' },
    { name: 'Russian', level: 'Native' }
  ];

  const softSkills: string[] = [
    'Empathetic and open to communication',
    'Responsible, able to work both independently and as part of a team',
    'Accept constructive criticism well',
    'Detail-oriented'
  ];

  const experience: ExperienceItem[] = [
    {
      from: '2024',
      to: '2025',
      company: 'Site Elite Studio',
      position: 'Fullstack Developer',
      description:
        `At Site Elite Studio, I built and maintained custom websites for businesses, working across both backend and frontend. I created REST APIs, integrated third-party services, and developed responsive interfaces from Figma designs.`,
      stack: ['PHP', 'MODX', 'MySQL', 'JavaScript', 'Nuxt.js', 'SCSS', 'Gulp', 'Apache', 'Git'],
      notable: [
        'A corporate website for a hydraulic engineering company (Nuxt.js, MODX, PHP)',
        'An e-commerce template with cart and delivery functionality (MODX, MySQL, JavaScript)',
        'API integration for a restaurant’s online ordering system (iiko API)',
        'A personal account system with authentication and order management for an online store'
      ]
    }
  ];

  const focus = `Specializing in backend development with a focus on designing and optimizing server-side logic, integrating APIs, and managing databases. Passionate about solving complex technical challenges and creating efficient, scalable solutions. Comfortable working in collaborative team environments and delivering high-quality results in remote settings.`;

  const hobbies: HobbyItem[] = [
    { name: 'Music', icon: '/images/icons/music.svg' },
    { name: 'Traveling', icon: '/images/icons/traveling.svg' },
    { name: 'Reading', icon: '/images/icons/reading.svg' },
    { name: 'Photography', icon: '/images/icons/camera.svg' }
  ];

  return { skills, languages, softSkills, experience, focus, hobbies };
}
