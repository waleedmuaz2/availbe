import api from './api';

export const SubjectChapterRepo = {
    getAllSubjectsWithChapter() {
        return api.get('subjects');
    },
    addSubject(payload) {
        return api.post('subject', payload);
    },
    addChapter(payload){
        return api.post('chapter', payload);
    },

};